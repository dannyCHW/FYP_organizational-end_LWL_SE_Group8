<?php

  include('firebaseConfig.php');
  require 'vendor/autoload.php';

  use Google\Cloud\Storage\StorageClient;

  $classCode = $_POST['id'];
  $docId = "";

  $userRef = $db->collection('organization_user');
  $query = $userRef->where('orgID', '=', $classCode);
  $result = $query->documents();

  foreach ($result as $result) {
    if ($result->exists()) {
      $docId = $result->id();
      break;
    }else{
    }
  }

$db->collection('organization_user')->document($docId)->update([
  ['path' => 'state', 'value' => 'reject']
]);


 ?>
