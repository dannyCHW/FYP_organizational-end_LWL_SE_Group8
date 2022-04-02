<?php

session_start();

include('firebaseConfig.php');

$orgDocID = $_SESSION['selectedOrgDocID'];

$db->collection('organization_user')->document($orgDocID)->update([
  ['path' => 'state', 'value' => "disable"]
]);
?>
