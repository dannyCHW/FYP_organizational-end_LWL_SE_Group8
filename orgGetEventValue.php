<?php


    include('firebaseConfig.php');
    require 'vendor/autoload.php';

    $eventID='';
    $eventID = $_SESSION['orgSelectEventID'];
    $eventName = "";
    $targetUser = "";
    $startDate = "";
    $endDate = "";
    $age = "";
    $ageUpDown = "";
    $money = "";
    $creatorID = "";
    $orgName = "" ;
    $intro ="";
    $applicant = 0;
    $questionNum = 0 ;

    $collectionReference = $db->collection('service');
    $documentReference = $collectionReference->document($eventID);
    $snapshot = $documentReference->snapshot();
    echo"<tbody>";

    if ($snapshot->exists()) {
        $eventName = $snapshot->data()['serviceName'];
        $targetUser = $snapshot->data()['targetAudience'];
        $startDate = $snapshot->data()['dateStart'];
        $endDate = $snapshot->data()['dateEnd'];
        $age = $snapshot->data()['age'];
        $ageUpDown = $snapshot->data()['ageUpDown'];
        $money = $snapshot->data()['money'];
        $creatorID = $snapshot->data()['creatorID'];
        $intro = $snapshot->data()['introduction'];

        $_SESSION['dash_EventName'] = $eventName;
        $_SESSION['dash_targetUser'] = $targetUser;
        $_SESSION['dash_startDate'] = $startDate;
        $_SESSION['dash_endDate'] = $endDate;
        $_SESSION['dash_age'] = $age;
        $_SESSION['dash_ageUpDown'] = $ageUpDown;
        $_SESSION['dash_money'] = $money;
        $_SESSION['dash_createID'] = $creatorID;
        $_SESSION['intro'] = $intro;

        $colle = $db->collection('response');
        $doc = $colle->where('serviceID', '=', $eventID);
        $result = $doc->documents();

        foreach ($result as $result) {
            if ($result->exists()) {
              $applicant += 1;
            }
          }

        $_SESSION['applicant'] = $applicant;


        $firstLayer = $db->collection('service')->document($_SESSION['orgSelectEventID']);
        $collections = $firstLayer->collection('questions');
        $ready_documents = $collections->orderBy('index', 'ASC');
        $documents = $ready_documents->documents();

        foreach ($documents as $documents) {
            $questionNum += 1;
        }

        $_SESSION['questionNum'] = $questionNum;


    } else {
        printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
    }
    echo"</tbody>";

 ?>
