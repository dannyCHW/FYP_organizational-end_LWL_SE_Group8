<?php

  include('./firebaseConfig.php');

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
        } else {
            printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
        }
        //
        echo"<tr><td>".$startDate."</td><td>".$serviceName."</td><td>".$orgName."</td><td>"."<td id='eventID' hidden>".$serviceID."</td></tr>";
      }else{
      }
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


    echo"
      <div class='top-sales box'>
        <div class='title'>Unverify Users List</div>
        <ul class='top-sales-details'>
          <li>
            <span class='product'><tr><td>IDK</td></span>
            <span class='price'><td>$999</td><tr></span>
          </li>
        </ul>
      </div>
      <br/>
    "

 ?>
