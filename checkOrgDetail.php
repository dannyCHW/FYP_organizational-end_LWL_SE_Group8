<?php


    include('firebaseConfig.php');
    require 'vendor/autoload.php';

    use Google\Cloud\Storage\StorageClient;


    $select_orgID='';
    $select_orgID = $_SESSION['selectedOrgDocID'];
    $about = "";
    $address = "";
    $email = "";
    $faxNumber = "";
    $number = "";
    $orgID = "";
    $orgName = "";
    $state = "" ;

    $collectionReference = $db->collection('organization_user');
    $documentReference = $collectionReference->document($select_orgID);
    $snapshot = $documentReference->snapshot();
    echo"<tbody>";

    if ($snapshot->exists()) {
        $about = $snapshot->data()['aboutOrganization'];//
        $address = $snapshot->data()['address'];//
        $email = $snapshot->data()['email'];//
        $faxNumber = $snapshot->data()['faxNumber'];
        $number = $snapshot->data()['number'];//
        $orgID = $snapshot->data()['orgID'];//
        $orgName = $snapshot->data()['orgName'];//
        $state = $snapshot->data()['state'];

        if($faxNumber == ""){
          $faxNumber = "N/A";
        }


        echo"

        <tr><td style='width:20%;'>Organization ID</td><td>".$orgID."</td></tr>
        <tr><td>Organization Name</td><td>".$orgName."</td></tr>
        <tr><td>Introduction</td><td>".$about."</td></tr>
        <tr><td>Email</td><td>".$email."</td></tr>
        <tr><td>Address</td><td>".$address."</td></tr>
        <tr><td>Contact Number</td><td>".$number."</td></tr>
        <tr><td>Fax Number</td><td>".$faxNumber."</td></tr>
        <tr><td>State</td><td id='lbState'>".$state."</td></tr>

        ";

    } else {
        printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
    }
    echo"</tbody>";

 ?>
