<?php
  include('firebaseConfig.php');

  $data = [
    'orgName' => $_POST['orgname'],
    'number' => $_POST['pnum'],
    'email' => $_POST['email'],
    'faxNumber' => $_POST['fnum'],
    'orgID' => $_POST['orgNum'],
    'address' => $_POST['address'],
    'password' => $_POST['pw'],
    'aboutOrganization' => $_POST['aboutOrganization'],
    'state' => 'nonVerify'
  ];

  $userRef = $db->collection('organization_user');
  $query = $userRef->where('orgID', '=', $_POST['orgNum']);
  $result = $query->documents();

  if(isset($result)){
    echo '<script>alert("The organizational or company number has been used.")</script>';
  }else{
    $db->collection('organization_user')->add($data);
    echo '<script>alert("Account create successful! Please confirm the email.")</script>';
  }
?>
