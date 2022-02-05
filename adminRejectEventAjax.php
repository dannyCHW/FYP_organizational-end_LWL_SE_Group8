<?php

  session_start();

  include('firebaseConfig.php');
  require 'vendor/autoload.php';

  use Google\Cloud\Storage\StorageClient;

  $eventID;
  $eventID = $_SESSION['$eventDetailID'];

  $db->collection('service')->document($eventID)->update([
    ['path' => 'status', 'value' => 'reject']
  ]);

 ?>
