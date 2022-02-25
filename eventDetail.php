<?php

    include('firebaseConfig.php');
    require 'vendor/autoload.php';

    use Google\Cloud\Storage\StorageClient;


    $eventID='';
    $eventID = $_SESSION['$eventDetailID'];
    $eventName = "";
    $targetUser = "";
    $startDate = "";
    $endDate = "";
    $age = "";
    $ageUpDown = "";
    $money = "";
    $creatorID = "";
    $orgName = "" ;

    $collectionReference = $db->collection('service');
    $documentReference = $collectionReference->document($eventID);
    $snapshot = $documentReference->snapshot();

    if ($snapshot->exists()) {
        $eventName = $snapshot->data()['serviceName'];
        $targetUser = $snapshot->data()['targetAudience'];
        $startDate = $snapshot->data()['dateStart'];
        $endDate = $snapshot->data()['dateEnd'];
        $age = $snapshot->data()['age'];
        $ageUpDown = $snapshot->data()['ageUpDown'];
        $money = $snapshot->data()['money'];
        $creatorID = $snapshot->data()['creatorID'];
        //creator info

        //orgName
        $collectionReference2 = $db->collection('organization_user');
        $documentReference2 = $collectionReference2->document($creatorID);
        $snapshot2 = $documentReference2->snapshot();
        $orgName = $snapshot2->data()['orgName'];

        echo"

        <tr><td>organization Name</td><td>".$orgName."</td></tr>
        <tr><td>Service Name</td><td>".$eventName."</td></tr>
        <tr><td>Target User</td><td>".$targetUser."</td></tr>
        <tr><td>Start Date</td><td>".$startDate."</td></tr>
        <tr><td>End OfTthe Date</td><td>".$endDate."</td></tr>
        <tr><td>Age</td><td>".$age."    ".$ageUpDown."</td></tr>
        <tr><td>Expected Cost</td><td>".$money."</td></tr>


        ";

    } else {
        printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
    }

 ?>
