<?php

  include('./firebaseConfig.php');

  $result = array();

  $eventName= "";
  $startDate = "";
  $serviceID = "";
  $createrID = "";
  $orgName = "";

  echo"
  <div class='sales-boxes'>
    <div class='recent-sales box'>
      <div class='title'>Unverify Event List</div>
      <div class='sales-details'>
        <table class='details' id='firstTable'>
          <tr><th class='topic'>Date</th><th class='topic'>Event Name</th><th class='topic'>Org Name</th><th></th></tr>
  ";
  $userRef = $db->collection('service');
  $query = $userRef->where('status', '=', 'unVerify')->limit(5);
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


            $result[] = array(
              'serviceID' =>  $serviceID,
              'serviceName' => $serviceName,
              'startDate' => $startDate,
              'orgName' => $orgName
            );

        } else {
            printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
        }
        //
        }else{
      }
    }

    $columns = array_column($result, 'startDate');
    array_multisort($columns, SORT_ASC,$result);

    foreach ($result as $count) {
        echo"<tr><td>".$count['startDate']."</td><td>".$count['serviceName']."</td><td>".$count['orgName']."</td><td>"."<td id='eventID' hidden>".$count['serviceID']."</td></tr>";
    }

  echo"
          </table>
        </div>
      <br>
      <div class='button'>
        <button id='btnViewAllEvent'>See All</button>
      </div>
    </div>
    ";




 ?>
