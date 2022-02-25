<?php

  include('./firebaseConfig.php');

  $proEventcount = 0;
  $activeUser = 0 ;
  $unVerifyOrgUser = 0;
  $unVerifyEvent = 0;

  $userRef = $db->collection('service');
  $query = $userRef->where('status', '=', 'verified');
  $result = $query->documents();

  foreach ($result as $result) {
    if ($result->exists()) {
      $proEventcount += 1;
    }else{
    }
  }

  $userRef = $db->collection('organization_user');
  $query = $userRef->where('state', '=', 'active');
  $result = $query->documents();

  foreach ($result as $result) {
    if ($result->exists()) {
      $activeUser += 1;
    }else{
    }
  }

  $userRef = $db->collection('organization_user');
  $query = $userRef->where('state', '=', 'nonVerify');
  $result = $query->documents();

  foreach ($result as $result) {
    if ($result->exists()) {
      $unVerifyOrgUser += 1;
    }else{
    }
  }

  $userRef = $db->collection('service');
  $query = $userRef->where('status', '=', 'unVerify');
  $result = $query->documents();

  foreach ($result as $result) {
    if ($result->exists()) {
      $unVerifyEvent += 1;
    }else{
    }
  }



echo"
    <div class='home-content'>
      <div class='overview-boxes'>
        <div class='box'>
          <div class='right-side'>
            <div class='box-topic'>In Progress Events</div>
            <div class='number'>$proEventcount</div>
          </div>
        </div>


        <div class='box'>
          <div class='right-side'>
            <div class='box-topic'>Platform Users</div>
            <div class='number'>$activeUser</div>
          </div>
        </div>


        <div class='box'>
          <div class='right-side'>
            <div class='box-topic'>Unmoderated User</div>
            <div class='number'>$unVerifyOrgUser</div>
          </div>
        </div>


        <div class='box'>
          <div class='right-side'>
            <div class='box-topic'>Unmoderated Events</div>
            <div class='number'>$unVerifyEvent</div>
          </div>
        </div>
      </div>
    "
  ?>
