<?php

include('firebaseConfig.php');


$userID = $_SESSION['$user_docId'];

$userRef = $db->collection('service');
$query = $userRef->where('creatorID', '=', $userID);
$query2 = $query->where('status', '=', 'verified');
$documents = $query2->documents();

$url = "";

foreach ($documents as $documents) {
    if ($documents->exists()) {
      $eventName = $documents ->data()['serviceName'];
      $startDate = $documents ->data()['dateStart'];
      $imgName = $documents ->data()['posterImg'];
      $endDate = $documents ->data()['dateEnd'];
      $serviceID = $documents ->id();

      $img_url = '';

      if($imgName != 'none'){
        $img_url = "<img  name='imgPoster'src='https://firebasestorage.googleapis.com/v0/b/lwl-se-fyp-2122-grp8.appspot.com/o/posters%2F".$imgName."?alt=media'height='645px'width='645px'>";

      }

      // echo"
      // <div class='column'>
      //   <div class='card shadow-sm'>
      //     <svg class='bd-placeholder-img card-img-top' width='100%' height='225'
      //       xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail'
      //       preserveAspectRatio='xMidYMid slice' focusable='false'>
      //       <title>Placeholder</title>
      //       <rect width='100%' height='100%' fill='#55595c' /><text x='50%' y='50%' fill='#eceeef'
      //         dy='.3em'>Thumbnail</text>
      //     </svg>
      //     <div class='card-body'>
      //       <p class='card-text'>".$eventName."</p>
      //       <div class='d-flex justify-content-between align-items-center'>
      //         <div class='btn-group'>
      //           <button type='button' class='btn btn-sm btn-outline-secondary'>View</button>
      //           <button type='button' class='btn btn-sm btn-outline-secondary'>Edit</button>
      //         </div>
      //         <small class='text-muted'>Started Date: ".$startDate."</small>
      //       </div>
      //     </div>
      //   </div>
      // </div>
      // ";

      echo"
      <div class='column'>
        <div class='card shadow-sm'>
          ".$img_url."
          <div class='card-body'>
            <p class='card-text'>".$eventName."</p>
            <div class='d-flex justify-content-between align-items-center'>
              <div class='btn-group'>

                <form method='POST' action='orgEventDashHTML.php'>
                  <button type='submit' id='btnSub'class='btn btn-sm btn-outline-secondary' value=".$serviceID.">View</button>
                </form>
                <button id='uploadImg' type='button' class='uploadImg'>Upload Poster</button>
                <p hidden id='serviceID'>".$serviceID."</p>
                <p hidden id='imgName'>".$imgName."</p>
                <p hidden>$serviceID</p>
                </div>
              <small class='text-muted'>Started Date: ".$startDate."</small>
              <small class='text-muted'>Ended Date: ".$endDate."</small>
            </div>
          </div>
        </div>
      </div>
      ";

    }else{}
  }
?>
