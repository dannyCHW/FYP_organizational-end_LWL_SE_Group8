<?php
require_once 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

$projectId = 'clean-algebra-325515';

$db = new FirestoreClient([
    'projectId' => $projectId,
]);

/*
$docRef = $db->collection('set1')->document('doc1');
$snapshot = $docRef->snapshot();

if ($snapshot->exists()) {
    printf('Document data:' . PHP_EOL);
    //print_r($snapshot->data());
    $tmp = [];
    $tmp = $snapshot->data();
    print_r($tmp);
} else {
    printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
} 
*/

$docRef = $db->collection('set1');
$documents = $docRef->documents();
foreach ($documents as $document) {
    if ($document->exists()) {
        printf('Document data for document %s:' . PHP_EOL, $document->id());
        print_r($document->data());
        printf(PHP_EOL);
    } else {
        printf('Document %s does not exist!' . PHP_EOL, $document->id());
    }
}