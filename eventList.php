<?php
include('firebaseConfig.php');
require 'vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;

$result = array();

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


      $collectionReference = $db->collection('organization_user');
      $documentReference = $collectionReference->document($createrID);
      $snapshot = $documentReference->snapshot();

      if ($snapshot->exists()) {
          $orgName = $snapshot->data()['orgName'];


      } else {
          printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
      }


      //new array

      $result[] = array(
        'serviceID' =>  $serviceID,
        'serviceName' => $serviceName,
        'startDate' => $startDate,
        'orgName' => $orgName
      );

      //
      }else{
    }
  }

  $columns = array_column($result, 'startDate');
  array_multisort($columns, SORT_ASC,$result);

  foreach ($result as $count) {
    echo"<tr><td>".$count['serviceName']."</td><td>".$count['orgName']."</td><td>".$count['startDate']."</td><td>"."<button id='btnDetail'>Show more</button>"."</td><td id='eventID' hidden>".$count['serviceID']."</td></tr>";
  }



 ?>
