<?php

session_start();

include('firebaseConfig.php');

$stfID = $_POST['stfID'];
$new_name = $_POST['name'];
$new_email = $_POST['email'];
$new_password = $_POST['newPwd1'];
$docID =   $_SESSION['$user_docId'];

if($new_password != ""){
  $db->collection('adminitor')->document($docID)->update([
    ['path' => 'name', 'value' => "$new_name"],
    ['path' => 'email', 'value' => "$new_email"],
    ['path' => 'password', 'value' => "$new_password"]
  ]);
}else{
  $db->collection('adminitor')->document($docID)->update([
    ['path' => 'name', 'value' => "$new_name"],
    ['path' => 'email', 'value' => "$new_email"]
  ]);
}

?>
