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
$contact ="";
$email = "";
$orgBusID = "";

$collectionReference = $db->collection('organization_user');
$documentReference = $collectionReference->document($orgID);
$snapshot = $documentReference->snapshot();

if ($snapshot->exists()) {
    $email = $snapshot->data()['email'];
    $contact = $snapshot->data()['number'];
    $orgBusID = $snapshot->data()['orgID'];
}


$pdf = new PHPExcel();


$pdf ->setActiveSheetIndex(0)
     ->mergeCells('A1:C1')
     ->mergeCells('D1:G1')
     ->setCellValue('A1','Service Name:')
     ->setCellValue('D1',$eventName)
     ->mergeCells('A2:C2')
     ->mergeCells('D2:G2')
     ->setCellValue('A2','Organization Name:')
     ->setCellValue('D2',$orgName)
     ->mergeCells('A3:C3')
     ->mergeCells('D3:G3')
     ->setCellValue('A3','Total Cost:')
     ->setCellValue('D3',$cost)
     ->mergeCells('A4:C4')
     ->mergeCells('D4:G4')
     ->setCellValue('A4','Total Applicant:')
     ->setCellValue('D4',$num_applicant)
     ->mergeCells('A5:C5')
     ->mergeCells('D5:G5')
     ->setCellValue('A5','Date:')
     ->setCellValue('D5',$startDate."  To  ".$endDate )
     ->mergeCells('A6:C6')
     ->mergeCells('D6:G6')
     ->setCellValue('A6','Target User: ')
     ->setCellValue('D6',$age . "  " . $ageUpDown . "  " . $targetUser )
     //org info
     ->mergeCells('A9:G9')
     ->setCellValue('A9','More Organazational Information: ')
     ->mergeCells('A10:C10')
     ->mergeCells('D10:G10')
     ->setCellValue('A10','Contact: ')
     ->setCellValue('D10',$contact)

     ->mergeCells('A11:C11')
     ->mergeCells('D11:G11')
     ->setCellValue('A11','Email: ')
     ->setCellValue('D11',$email)

     ->mergeCells('A12:C12')
     ->mergeCells('D12:G12')
     ->setCellValue('A12','Organazational ID: ')
     ->setCellValue('D12',$orgBusID)

     //applicant list
     ->mergeCells('I1:U1')
     ->setCellValue('I1',"Applicant List" )
     ->mergeCells('J2:L2')
     ->setCellValue('J2',"Applicant Name" )
     ->mergeCells('M2:O2')
     ->setCellValue('M2',"Applicant ID Number" )
     ->mergeCells('P2:R2')
     ->setCellValue('P2',"Gender" )
     ->mergeCells('S2:U2')
     ->setCellValue('S2',"Submition Date" )
     ->setCellValue('I2',"Index" )
     ;

     //print list

     $column_count = 3;
     $applicant_count = 1;
     $cJ = 'J';
     $cM = 'M';
     $cP = 'P';
     $cS = 'S';
     $cO = 'O';
     $cR = 'R';
     $cU = 'U';


     $colle = $db->collection('response');
     $doc = $colle->where('serviceID', '=', $eventID);
     $result = $doc->documents();
     foreach ($result as $result) {
       $date = $result->data()['date'];
       $Str = $result->data()['autoFillWithAns'];
       $newStr = str_replace('\'', '"', $Str);
       $str_json = substr($newStr, 18, -3);
       $str_json1 = str_replace('{', '', $str_json);
       $str_json2 = str_replace('}', '', $str_json1);
       $json = "{".$str_json2."}";
       //'{"hkid":"A1234567(8)","chName":"李智","birthday":"1997-12-01","gender":"M"}'
       $obj = json_decode($json);
       $name = $obj->{'chName'};
       $obj = json_decode($json);
       $gender = $obj->{'gender'};
       $hkid = $obj->{'hkid'};

       $pdf ->setActiveSheetIndex(0)
            ->setCellValue('I'.$column_count,$applicant_count )
            ->mergeCells('J'.$column_count.":L".$column_count)
            ->setCellValue('J'.$column_count,$name )
            ->mergeCells('M'.$column_count.":O".$column_count)
            ->setCellValue('M'.$column_count,$hkid )
            ->mergeCells('P'.$column_count.":R".$column_count)
            ->setCellValue('P'.$column_count,$gender )
            ->mergeCells('S'.$column_count.":U".$column_count)
            ->setCellValue('S'.$column_count,$date )
            ->getStyle('I'.$column_count)->getAlignment()->setHorizontal('left');
            ;

      $column_count +=1;
      $applicant_count +=1;
       }

/*
     foreach ($result as $result) {
         if ($result->exists()) {
           $date = $result->data()['date'];
           $Str = $result->data()['autoFillWithAns'];
           $newStr = str_replace('\'', '"', $Str);
           $str_json = substr($newStr, 18, -3);
           $str_json1 = str_replace('{', '', $str_json);
           $str_json2 = str_replace('}', '', $str_json1);
           $json = "{".$str_json2."}";
           //'{"hkid":"A1234567(8)","chName":"李智","birthday":"1997-12-01","gender":"M"}'
           $obj = json_decode($json);
           //'{"a":1,"b":2,"c":3,"d":4,"e":5}';

           $name = $obj->{'chName'};
           $obj = json_decode($json);
           $gender = $obj->{'gender'};

           $pdf ->setActiveSheetIndex(0)
                ->mergeCells($cJ.$column_count.":".$cL.$column_count)
                ->mergeCells($cM.$column_count.":".$cO.$column_count)
                ->mergeCells($cP.$column_count.":".$cR.$column_count)
                ->mergeCells($cS.$column_count.":".$cU.$column_count)
                ;


         }
       }
*/





$pdf->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal('left');
$pdf->getActiveSheet()->getStyle('D4')->getAlignment()->setHorizontal('left');
$pdf->getActiveSheet()->getStyle('I1')->getAlignment()->setHorizontal('center');

$pdf->getActiveSheet()->getStyle('A9')->getAlignment()->setHorizontal('center');
$pdf->getActiveSheet()->getStyle('D10')->getAlignment()->setHorizontal('left');

$file = PHPExcel_IOFactory::createWriter($pdf,'Excel2007');
$file->save($eventName . '.xlsx');


?>
