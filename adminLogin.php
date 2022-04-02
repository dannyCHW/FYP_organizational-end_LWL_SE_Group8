<?php
  session_start();
  include('firebaseConfig.php');

  $input_email = $_POST['email'];
  $input_password = $_POST['pw'];
  $identity = 'adminitor';
  $search = false;
  $pwd = "";
  $state="";
  $user_docId='';
  $stfID='';
  $name='';

  $userRef = $db->collection($identity);
  $query = $userRef->where('email', '=', $_POST['email']);
  $documents = $query->documents();

  foreach ($documents as $documents) {
      if ($documents->exists()) {
        $user_docId = $documents->id();
        $pwd = $documents->data()['password'];
        $state = $documents->data()['state'];
        $stfID = $documents->data()['id'];
        $name = $documents->data()['name'];
        $search = true;
        break;
      }else{
      }
    }

  if($pwd=="" ||$input_password != $pwd||$search == false){
    echo '<script>alert("Wrong email or password, please try again.")</script>';
    echo "<script type='text/javascript'>
            window.location.href = 'adminLoginHTML.php';
            </script>";
  }elseif($state == "disable"){
      echo '<script>alert("The account was disable.")</script>';
      echo "<script type='text/javascript'>
              window.location.href = 'adminLoginHTML.php';
              </script>";
  }elseif($state != "active"){
    echo '<script>alert("This account not verify yet.")</script>';
    echo "<script type='text/javascript'>
            window.location.href = 'adminLoginHTML.php';
            </script>";
  }    else if($input_password == $pwd){
      $_SESSION['$user_docId'] = $user_docId;
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['type'] = $identity;
      $_SESSION['state'] = $state;
      $_SESSION['identity'] = $identity;
      $_SESSION['stfID'] = $stfID;
      $_SESSION['name'] = $name;
      $_SESSION['pwd'] = $pwd;
      echo '<script>alert("Login successful , welcome.")</script>';
        //admin lobby
      echo "<script>
      window.location.href='adminDashHTML.php';
      </script>";
  }

 ?>
