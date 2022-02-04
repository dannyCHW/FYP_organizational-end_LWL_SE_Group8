<?php
include('firebaseConfig.php');
require 'vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;

$serviceName = "";
$createrID = "";
$startDate = "";
$orgName = "";
$serviceID = "";

$userRef = $db->collection('service');
$query = $userRef->where('status', '=', 'unVerify');
$list = $query->documents();

foreach ($list as $list) {

    if ($list->exists()) {
      $serviceID = $list->id();
      $serviceName = $list->data()['serviceName'];
      $createrID =  $list->data()['creatorID'];
      $startDate =  $list->data()['dateStart'];
      //

      $collectionReference = $db->collection('organization_user');
      $documentReference = $collectionReference->document($createrID);
      $snapshot = $documentReference->snapshot();

      if ($snapshot->exists()) {
          $orgName = $snapshot->data()['orgName'];
      } else {
          printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
      }
      //
      echo"<tr><td>".$serviceName."</td><td>".$orgName."</td><td>".$startDate."</td><td>"."<button id='btnDetail'>Show more</button>"."</td><td id='eventID' hidden>".$serviceID."</td></tr>";
    }else{
    }
  }


 ?>
