<?php
  session_start();

  include('firebaseConfig.php');
  require 'vendor/autoload.php';

  use Google\Cloud\Storage\StorageClient;

  $data = [
    'orgName' => $_POST['orgname'],
    'number' => $_POST['pnum'],
    'email' => $_POST['email'],
    'faxNumber' => $_POST['fnum'],
    'orgID' => $_POST['orgNum'],
    'address' => $_POST['address'],
    'password' => $_POST['pw'],
    'aboutOrganization' => $_POST['aboutOrganization'],
    'state' => 'nonVerify'
  ];
  $exist = false;
  $userRef = $db->collection('organization_user');
  $query = $userRef->where('orgID', '=', $_POST['orgNum']);
  $result = $query->documents();

  foreach ($result as $result) {
      if ($result->exists()) {
        $exist = true;
        break;
      }else{
      }
    }
  if($exist === TRUE){
    echo '<script>alert("The organizational or company number has been used.")</script>';
    echo "<script>
    window.location.href='homepageHTML.php';
    </script>";
  }else{

    $db->collection('organization_user')->add($data);
/////

/////
    echo "<script>
    alert('Account created, please waiting verify.');
    window.location.href='homepageHTML.php';
    </script>";
  }
?>
