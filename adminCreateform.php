<?php

session_start();

$creatorID;

if (isset($_SESSION['$user_docId']) && !empty($_SESSION['$user_docId'])) {
    $creatorID = $_SESSION['$user_docId'];
} else {
    $creatorID = 'tmp_developer';
}

$serviceName = $_POST['serviceName'];
$summary = $_POST['summary'];
$target = $_POST['target'];
$age_from = $_POST['age_from'];
$age_to = $_POST['age_to'];
$dateStart = $_POST['dateStart'];
$dateEnd = $_POST['dateEnd'];
$money = $_POST['money'];
$sessionList = $_POST['sessionList'];

require_once 'firebaseConfig.php';

$service_Doc_data = [
    'creatorID' => $creatorID,
    'serviceName' => $serviceName,
    'introduction' => $summary,
    'targetAudience' => $target,
    'ageFrom' => $age_from,
    'ageTo' => $age_to,
    'dateStart' => $dateStart,
    'dateEnd' => $dateEnd,
    'money' => $money,
    'status' => 'unVerify',
    'posterImg' => 'none',
    'type' => 'gov'
];

$addedDocRef_service = $db->collection('service')->add($service_Doc_data);
$service_doc_id = $addedDocRef_service->id();

for ($x = 0; $x < sizeof($sessionList); $x++) {

    $tmp = $sessionList[$x];
    $session_index = $x + 1;

    $session_Doc_data = [
        'index' => $session_index
    ];

    $addedDocRef_session = $db->collection('service/' . $service_doc_id . '/session')->add($session_Doc_data);

    for ($s = 0; $s < sizeof($tmp); $s++) {

        $tmp1 = $tmp[$s];
        $tmp2 = json_encode($tmp1);
        $tmp3 = json_decode($tmp2);

        $question_index = $tmp3->question_index;
        $question_type = $tmp3->question_type;
        $question_self = $tmp3->question_self;
        $question_description = $tmp3->question_description;

        $question_Doc_data = [
            'index' => $question_index,
            'type' => $question_type,
            'question' => $question_self,
            'description' => $question_description
        ];

        $addedDocRef_questions = $db->collection('service/' . $service_doc_id . '/session/' . $addedDocRef_session->id() . '/questions')->add($question_Doc_data);

    }
}

echo $service_doc_id;

