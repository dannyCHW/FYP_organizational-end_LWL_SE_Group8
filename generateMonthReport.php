<?php

session_start();
require_once('phpexcel/Classes/PHPExcel.php');
include('firebaseConfig.php');

$eventName = $_SESSION['dash_EventName'];
$orgName = $_SESSION['orgName'];
$cost = $_SESSION['dash_money'];
$num_applicant = $_SESSION['applicant'];
$startDate = $_SESSION['dash_startDate'];
$endDate = $_SESSION['dash_endDate'];
$targetUser = $_SESSION['dash_targetUser'];
$ageUpDown = $_SESSION['dash_ageUpDown'];
$age = $_SESSION['dash_age'];
$description = $_SESSION['intro'] ;
$eventID = $_SESSION['orgSelectEventID'];
$orgID = $_SESSION['$user_docId'];
$email = "";
$contact = "";
$orgBusID = "";
$faxNum = '';
$address = '';

$total_applicant = 0;
$total_event = 0 ;
$total_cost = 0;

$date_month_str = date('F');
$date_month_int = date('m');
$date_year = date("Y");
$month_sql_min = $date_year . "-" . $date_month_int."-01";
$month_sql_max = $date_year . "-" . $date_month_int."-31";

$reportName = $date_month_str . "MonthReport";

$collectionReference = $db->collection('organization_user');
$documentReference = $collectionReference->document($orgID);
$snapshot = $documentReference->snapshot();

if ($snapshot->exists()) {
    $email = $snapshot->data()['email'];
    $contact = $snapshot->data()['number'];
    $orgBusID = $snapshot->data()['orgID'];
    $faxNum = $snapshot->data()['faxNumber'];
    $address = $snapshot->data()['address'];


    if($faxNum == null){
      $faxNum = "Null";
    }
}

$pdf = new PHPExcel();


$pdf ->setActiveSheetIndex(0)
     ->mergeCells('A1:H1')
     ->mergeCells('A2:C2')
     ->setCellValue('A1','Organazation Information')
     ->setCellValue('A2','Organazation Name')
     ->mergeCells('D2:H2')
     ->setCellValue('D2',$orgName)
     ->mergeCells('A3:C3')
     ->setCellValue('A3','Aircraft registration')
     ->mergeCells('D3:H3')
     ->setCellValue('D3',$orgBusID)
     ->mergeCells('A4:C4')
     ->setCellValue('A4','Email')
     ->mergeCells('D4:H4')
     ->setCellValue('D4',$email)
     ->mergeCells('A5:C5')
     ->setCellValue('A5','Contact Number')
     ->mergeCells('D5:H5')
     ->setCellValue('D5',$contact)
     ->mergeCells('A6:C6')
     ->setCellValue('A6','Fax Number')
     ->mergeCells('D6:H6')
     ->setCellValue('D6',$faxNum)
     ->mergeCells('A7:C7')
     ->mergeCells('D7:H7')
     ->setCellValue('A7','Address')
     ->setCellValue('D7',$address)

     //////

     ->mergeCells('J1:Q1')
     ->setCellValue('J1',"Summarise Data ($date_month_str)")
     ->mergeCells('J2:L2')
     ->setCellValue('J2','Total Event ')
     //total event numebr
     ->mergeCells('J3:L3')
     ->setCellValue('J3','Total Applicant ')
     //total applicant
     ->mergeCells('J4:L4')
     ->setCellValue('J4','Total Money Cost ')
     ->mergeCells('J5:L5')
     ->setCellValue('J5','Average Applicant')
     ->mergeCells('J6:L6')
     ->setCellValue('J6','Average Cost')

     //average




     ////////

     ->mergeCells('S1:AD1')
     ->setCellValue('S1',"Event List")
     ->setCellValue('S2',"Index")
     ->mergeCells('T2:X2')
     ->setCellValue('T2',"Event Name")
     ->mergeCells('Y2:Z2')
     ->setCellValue('Y2',"Started Date")
     ->mergeCells('AA2:AB2')
     ->setCellValue('AA2',"Total Applicant")
     ->mergeCells('AC2:AD2')
     ->setCellValue('AC2',"Cost")
     ;


/////Loop Event List

$userID = $_SESSION['$user_docId'];

$userRef = $db->collection('service');
$query3 = $userRef->where("dateStart", ">=", $month_sql_min);
$documents = $query3->documents();

$eventList_index = 1 ;
$nowRow = 3;

foreach ($documents as $documents) {

    if ($documents->exists()) {

      $get_date = $documents ->data()['dateStart'];
      $get_state = $documents ->data()['status'];
      $get_createrID = $documents ->data()['creatorID'];
      $cost = $documents ->data()['money'];
      $eventName = $documents ->data()['serviceName'];
      $event_id = $documents->id();

      if($get_ <= $month_sql_max && $get_state == 'verified' && $get_createrID == $orgID){

        $evCol = $db->collection('response');
        $queryApplicant = $evCol->where("serviceID", "=", $event_id);
        $applicantList = $queryApplicant->documents();
        $single_applicant =  0;
        foreach ($applicantList as $applicantList) {
          $single_applicant += 1;
        }



        $pdf ->setActiveSheetIndex(0)
             ->setCellValue('S'.$nowRow,$eventList_index)
             ->mergeCells('T'.$nowRow.':X'.$nowRow)
             ->setCellValue('T'.$nowRow,$eventName)
             ->mergeCells('Y'.$nowRow.':Z'.$nowRow)
             ->setCellValue('Y'.$nowRow,$get_date)
             ->mergeCells('AA'.$nowRow.':AB'.$nowRow)
             ->setCellValue('AA'.$nowRow,$single_applicant)
             ->mergeCells('AC'.$nowRow.':AD'.$nowRow)
             ->setCellValue('AC'.$nowRow,$cost)
             ;
             $pdf->getActiveSheet()->getStyle('AC'.$nowRow)->getAlignment()->setHorizontal('left');
             $pdf->getActiveSheet()->getStyle('S'.$nowRow)->getAlignment()->setHorizontal('left');
             $pdf->getActiveSheet()->getStyle('AA'.$nowRow)->getAlignment()->setHorizontal('left');


        $total_event += 1;
        $eventList_index += 1 ;
        $nowRow +=1;


        $total_cost += $cost;
        $total_applicant += $single_applicant;
      }

    }else{}
  }


  ////

$count_middle_row = 2 ;

$pdf ->setActiveSheetIndex(0)
     ->mergeCells('M2:Q2')
     ->setCellValue('M2',$total_event)
     ->mergeCells('M3:Q3')
     ->setCellValue('M3',$total_applicant)
     ->mergeCells('M4:Q4')
     ->setCellValue('M4',$total_cost)
     ->mergeCells('M5:Q5')
     ->setCellValue('M5',$total_applicant/$total_event)
     ->mergeCells('M6:Q6')
     ->setCellValue('M6',$total_cost/$total_event)
     ;


$pdf->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');
$pdf->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal('left');
$pdf->getActiveSheet()->getStyle('D5')->getAlignment()->setHorizontal('left');
$pdf->getActiveSheet()->getStyle('D6')->getAlignment()->setHorizontal('left');
//
$pdf->getActiveSheet()->getStyle('J1')->getAlignment()->setHorizontal('center');
//
$pdf->getActiveSheet()->getStyle('S1')->getAlignment()->setHorizontal('center');


$file = PHPExcel_IOFactory::createWriter($pdf,'Excel2007');
$file->save($reportName . '.xlsx');



?>
