<?php
  session_start();
  include('firebaseConfig.php');

  $input_email = $_POST['email'];
  $input_password = $_POST['pw'];
  $identity = $_POST['identity'];
  $search = false;
  $pwd = "";
  $state="";

  $userRef = $db->collection($identity);
  $query = $userRef->where('email', '=', $_POST['email']);
  $documents = $query->documents();

  foreach ($documents as $documents) {
      if ($documents->exists()) {
        $pwd = $documents->data()['password'];
        $state = $documents->data()['state'];
        $search = true;
        break;
      }else{
      }
    }

  if($pwd=="" ||$input_password != $pwd||$search == false){
    echo '<script>alert("Wrong email or password, please try again.")</script>';
    echo "<script type='text/javascript'>
            window.location.href = 'loginHTML.php';
            </script>";
  }elseif($state == "disable"){
      echo '<script>alert("The account was disable.")</script>';
      echo "<script type='text/javascript'>
              window.location.href = 'loginHTML.php';
              </script>";
  }else if($input_password == $pwd){
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['type'] = $identity;
      $_SESSION['state'] = $state;
      echo '<script>alert("Login successful , welcome.")</script>';
      if($state == "admin"){
        //admin lobby
      }else{
        //org lobby
      }
  }

 ?>
