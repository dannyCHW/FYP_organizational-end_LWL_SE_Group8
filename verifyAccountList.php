<?php
include('firebaseConfig.php');
require 'vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;

$exist = false;
$userRef = $db->collection('organization_user');
$query = $userRef->where('state', '=', 'nonVerify');
$list = $query->documents();

foreach ($list as $list) {
    if ($list->exists()) {
      $orgName = $list->data()['orgName'];
      $orgID =  $list->data()['orgID'];
      $email =  $list->data()['email'];
      $phone =  $list->data()['number'];
      echo"<tr><td>".$orgName."</td><td>".$orgID."</td><td>".$email."</td><td>".$phone."</td><td>"."<button id='accept'>Accept</button>"."</td><td>"."<button id='reject'>Reject</button>"."</td></tr>";
    }else{
    }
  }

 ?>
