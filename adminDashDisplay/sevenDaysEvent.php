<?php

    include('../firebaseConfig.php');

    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $date3 = $_POST['date3'];
    $date4 = $_POST['date4'];
    $date5 = $_POST['date5'];
    $date6 = $_POST['date6'];
    $date7 = $_POST['date7'];
    $sum1 = 0;
    $sum2 = 0;
    $sum3 = 0;
    $sum4 = 0;
    $sum5 = 0;
    $sum6 = 0;
    $sum7 = 0;


    $userRef = $db->collection('service');
    $query = $userRef->where('dateStart', '=', $date1);
    $result = $query->documents();

    foreach ($result as $result) {
          $sum1 += 1;
    }

    $userRef = $db->collection('service');
    $query = $userRef->where('dateStart', '=', $date2);
    $result = $query->documents();

    foreach ($result as $result) {
          $sum2 += 1;
    }

    $userRef = $db->collection('service');
    $query = $userRef->where('dateStart', '=', $date3);
    $result = $query->documents();

    foreach ($result as $result) {
          $sum3 += 1;
    }

    $userRef = $db->collection('service');
    $query = $userRef->where('dateStart', '=', $date4);
    $result = $query->documents();

    foreach ($result as $result) {
          $sum4 += 1;
    }

    $userRef = $db->collection('service');
    $query = $userRef->where('dateStart', '=', $date5);
    $result = $query->documents();

    foreach ($result as $result) {
          $sum5 += 1;
    }

    $userRef = $db->collection('service');
    $query = $userRef->where('dateStart', '=', $date6);
    $result = $query->documents();

    foreach ($result as $result) {
          $sum6 += 1;
    }

    $userRef = $db->collection('service');
    $query = $userRef->where('dateStart', '=', $date7);
    $result = $query->documents();

    foreach ($result as $result) {
          $sum7 += 1;
    }
    $arr = array();
    $arr[0] = $sum1;
    $arr[1] = $sum2;
    $arr[2] = $sum3;
    $arr[3] = $sum4;
    $arr[4] = $sum5;
    $arr[5] = $sum6;
    $arr[6] = $sum7;
    echo json_encode($arr);


 ?>
