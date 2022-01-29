<?php
  require_once 'vendor/autoload.php';

  use Google\Cloud\Firestore\FirestoreClient;

  $projectId = 'lwl-se-fyp-2122-grp8';

  $db = new FirestoreClient([
      'projectId' => $projectId,
  ]);
  $data = [
    'orgName' => $_POST['orgname'],
    'number' => $_POST['pnum'],
    'email' => $_POST['email'],
    'faxNumber' => $_POST['fnum'],
    'orgID' => $_POST['orgNum'],
    'address' => $_POST['address'],
    'password' => $_POST['pw'],
    'aboutOrganization' => $_POST['aboutOrganization']
  ];
  $citiesRef = $db->collection('samples/php/cities');
  $query = $citiesRef->where('orgID', '=', $_POST['orgNum']);
  $snapshot = $query->documents();
  if(isset($snapshot)){
    echo '<script>alert("The organizational or company number has been used.")</script>';
  }else{
    $db->collection('organization_user')->add($data);
    echo '<script>alert("Account create successful! Please confirm the email.")</script>';
  }
?>
