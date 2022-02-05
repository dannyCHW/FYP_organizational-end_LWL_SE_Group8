<?php

    include('firebaseConfig.php');
    require 'vendor/autoload.php';

    use Google\Cloud\Storage\StorageClient;

    $eventID;
    $eventID = $_SESSION['$eventDetailID'];
    $index = "";
    $questiob = "";

    $firstLayer = $db->collection('service')->document($eventID);
    $collections = $firstLayer->collection('questions');
    $ready_documents = $collections->orderBy('index', 'ASC');
    $documents = $ready_documents->documents();

    foreach ($documents as $documents) {
      $index = $documents->data()['index'];
      $question = $documents->data()['question'];
      echo"<tr><td>".$index."</td><td>".$question."</td></tr>";
    }

 ?>
