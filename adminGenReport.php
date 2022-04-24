<?php

session_start();
require_once('phpexcel/Classes/PHPExcel.php');
include('firebaseConfig.php');

$today = $_POST['today'];
$fromday = $_POST['fromDay'];

$totalApllicant = 0;
$totalCost = 0 ;
$nowRow = 3;




$pdf = new PHPExcel();

$pdf ->setActiveSheetIndex(0)
->mergeCells('A1:Q1')
->setCellValue('A1',$today." To" . $fromday . " All Event List")
     ->setCellValue('A2','Index')
     ->mergeCells('B2:E2')
     ->setCellValue('B2','Event Name')
     ->mergeCells('F2:I2')
     ->setCellValue('F2','Organazation Name')
     ->mergeCells('J2:K2')
     ->setCellValue('J2','Event Cost')
     ->mergeCells('L2:M2')
     ->setCellValue('L2','Applicant Count')
     ->mergeCells('N2:O2')
     ->setCellValue('N2','Start Date')
     ->mergeCells('P2:Q2')
     ->setCellValue('P2','End Date')
     ;



$userRef = $db->collection('service');
$query3 = $userRef->where("dateStart", ">=", $fromday);
$documents = $query3->documents();

$countEvent = 1;

foreach ($documents as $documents) {

    if ($documents->exists()) {

      $get_dateStart = $documents ->data()['dateStart'];
      $get_dateEnd = $documents ->data()['dateEnd'];
      $get_state = $documents ->data()['status'];
      $get_createrID = $documents ->data()['creatorID'];
      $cost = $documents ->data()['money'];
      $eventName = $documents ->data()['serviceName'];
      $event_id = $documents->id();

      if($get_dateStart <= $today && $get_state == 'verified'){

        $evCol = $db->collection('response');
        $queryApplicant = $evCol->where("serviceID", "=", $event_id);
        $applicantList = $queryApplicant->documents();
        $single_applicant =  0;
        foreach ($applicantList as $applicantList) {
          $single_applicant += 1;
        }

        $collectionReference = $db->collection('organization_user');
        $documentReference = $collectionReference->document($get_createrID);
        $snapshot = $documentReference->snapshot();
        echo"<tbody>";

        if ($snapshot->exists()) {

          $get_orgName = $snapshot ->data()['orgName'];

        }

        $pdf ->setActiveSheetIndex(0)
             ->setCellValue('A'.$nowRow,$countEvent)
             ->mergeCells('B'.$nowRow.':E'.$nowRow)
             ->setCellValue('B'.$nowRow,$eventName)
             ->mergeCells('F'.$nowRow.':I'.$nowRow)
             ->setCellValue('F'.$nowRow,$get_orgName)
             ->mergeCells('J'.$nowRow.':K'.$nowRow)
             ->setCellValue('J'.$nowRow,$cost)
             ->mergeCells('L'.$nowRow.':M'.$nowRow)
             ->setCellValue('L'.$nowRow,$single_applicant)
             ->mergeCells('N'.$nowRow.':O'.$nowRow)
             ->setCellValue('N'.$nowRow,$get_dateStart)
             ->mergeCells('P'.$nowRow.':Q'.$nowRow)
             ->setCellValue('P'.$nowRow,$get_dateEnd)
             ;

       $pdf->getActiveSheet()->getStyle('A'.$nowRow)->getAlignment()->setHorizontal('left');
       $pdf->getActiveSheet()->getStyle('J'.$nowRow)->getAlignment()->setHorizontal('left');
       $pdf->getActiveSheet()->getStyle('L'.$nowRow)->getAlignment()->setHorizontal('left');



       $nowRow += 1;
       $countEvent += 1 ;
       $totalApllicant += $single_applicant;
       $totalCost = $cost;
      }

    }else{}
  }

  $pdf ->setActiveSheetIndex(0)
       ->mergeCells('S1:Y1')
       ->setCellValue('S1',"Total Value")
       ->mergeCells('S2:U2')
       ->setCellValue('S2',"Total Event")
       ->mergeCells('V2:Y2')
       ->setCellValue('V2',$countEvent)

       ->mergeCells('S3:U3')
       ->setCellValue('S2',"Total Applicant")
       ->mergeCells('V3:Y3')
       ->setCellValue('V3',$totalApllicant)

       ->mergeCells('S4:U4')
       ->setCellValue('S4',"Total Cost")
       ->mergeCells('V4:Y4')
       ->setCellValue('V3',$totalCost)
       ;


$pdf->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');

$file = PHPExcel_IOFactory::createWriter($pdf,'Excel2007');
$file->save("AdminReport".$today."To".$fromday . '.xlsx');

header("Location:adminGenReportHTML.php");
?>
