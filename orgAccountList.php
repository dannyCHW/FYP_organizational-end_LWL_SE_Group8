<?php
include('firebaseConfig.php');
require 'vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;

$result = array();

$exist = false;
$userRef = $db->collection('organization_user');
$query = $userRef->where('state', '!=', 'nonVerify');
$list = $query->documents();

foreach ($list as $list) {
    if ($list->exists()) {
      $orgDocID = $list->id();
      $orgName = $list->data()['orgName'];
      $email =  $list->data()['email'];
      $number =  $list->data()['number'];
      $state =  $list->data()['state'];
      echo"<tr><td>".$orgName."</td><td>".$email."</td><td>".$number."</td><td>".$state."</td><td><button id='managementBtn'>Management</button></td><td id='orgID' hidden>".$orgDocID."</td></tr>";
    }else{
    }
  }

 ?>
