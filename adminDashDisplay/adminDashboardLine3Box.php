<?php

    include('./firebaseConfig.php');

    echo"
    <div class='home-content'>
      <div class='overview-boxes'>
        <div class='box'>
          <div class='right-side'>
            <div class='box-topic'>Android Average Usage Time</div>
            <div class='number'>#</div>
          </div>
        </div>
        <div class='box'>
          <div class='right-side'>
          ";

      $today = date("Y-m-d");
      $userRef = $db->collection('response');
      $query = $userRef->where('date', '=', $today);
      $result = $query->documents();

      $countTodayPeople = 0;

      foreach ($result as $result) {
        $countTodayPeople += 1;
      }


      echo"
            <div class='box-topic'>Android Users Today </div>
            <div class='number'>$countTodayPeople</div>
          </div>
        </div>
        <div class='box'>
          <div class='right-side'>
            <div class='box-topic'>Write In Times</div>
            <div class='number'>#</div>
          </div>
        </div>
        <div class='box'>
          <div class='right-side'>
            <div class='box-topic'>Average Event Of Org User</div>
            <div class='number'>#</div>
          </div>
        </div>
      </div>
    </div>
    "
 ?>
