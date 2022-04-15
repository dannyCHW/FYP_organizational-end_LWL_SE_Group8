<?php

  include('firebaseConfig.php');

  $applicantID = $_SESSION["applicantID"];
  $eventID = $_SESSION["orgSelectEventID"];

  echo"<h3>Other Personal Information</h3>";

  $collectionReference = $db->collection('response');
  $documentReference = $collectionReference->document($applicantID);
  $snapshot = $documentReference->snapshot();

  if ($snapshot->exists()) {

        $Str = $result->data()['autoFillWithAns'];
        $newStr = str_replace('\'', '"', $Str);
        $str_json = substr($newStr, 18, -3);
        $str_json1 = str_replace('{', '', $str_json);
        $str_json2 = str_replace('}', '', $str_json1);
        $json = "{".$str_json2."}";
        //'{"hkid":"A1234567(8)","chName":"李智","birthday":"1997-12-01","gender":"M"}'

        echo"              <div class='card-body p-3'>
                          <div class='table-responsive' style='height: 25rem;'><table class='table table-striped table-sm' id='t'><thead>";

        $obj = json_decode($json);
        $name = $obj->{'chName'};
        if($name!=null){
          echo "<tr><td>Chinese Name:</td><td>$name</td><tr>";
        }

        $obj = json_decode($json);
        $hkid = $obj->{'hkid'};
        if($hkid!= null){
          echo "<tr><td>HKID Number:</td><td>$hkid</td><tr>";
        }

        $obj = json_decode($json);
        $gender = $obj->{'gender'};
        if($gender != null){
          echo "<tr><td>Gender:</td><td>$gender</td><tr>";
        }

        $obj = json_decode($json);
        $birthday = $obj->{'birthday'};
        if($birthday!= null){
          echo "<tr><td>Date Of Birth:</td><td>$birthday</td><tr>";
        }

        echo "</thead></table></div></div>";


    }

 ?>
