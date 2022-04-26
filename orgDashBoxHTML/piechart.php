<?php
function session_error_handling_function($code, $msg, $file, $line) {
// your handling code here
}

set_error_handler('session_error_handling_function');
session_start();
restore_error_handler();
    include('../firebaseConfig.php');

    $eventID = $_SESSION["orgSelectEventID"];

    $male = 0;
    $female = 0;

    $userRef = $db->collection('response');
    $query = $userRef->where('serviceID', '=', $eventID);
    $result = $query->documents();


    foreach ($result as $result) {
        if ($result->exists()) {

          $applicantID = $result->id();
          $date = $result->data()['date'];
          $Str = $result->data()['autoFillWithAns'];
          $newStr = str_replace('\'', '"', $Str);
          $str_json = substr($newStr, 18, -3);
          $str_json1 = str_replace('{', '', $str_json);
          $str_json2 = str_replace('}', '', $str_json1);
          $json = "{".$str_json2."}";
          //'{"hkid":"A1234567(8)","chName":"李智","birthday":"1997-12-01","gender":"M"}'

          $obj = json_decode($json);
          $gender = $obj->{'gender'};

          if($gender == '男'){
            $male += 1 ;
          }else{
            $female += 1 ;
          }



        }
      }

      echo json_encode(array("a" => $male, "b" => $female));


?>
