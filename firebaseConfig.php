<?php
require_once 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

$projectId = 'lwl-se-fyp-2122-grp8';

$db = new FirestoreClient([
    'projectId' => $projectId,
]);



//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//Do not uncomment the codes below!
//The codes below is just for authors to reference


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

/*

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

*/

// $data = [
//     'name' => 'Los Angeles',
//     'state' => 'CA',
//     'country' => 'USA'
// ];
// $db->collection('set1')->document('LA')->set($data);
