<?php
require_once 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

$projectId = 'lwl-se-fyp-2122-grp8';

$db = new FirestoreClient([
    'projectId' => $projectId,
]);
