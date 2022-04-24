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
$age = $_POST['age'];
$ageUpDown = $_POST['ageUpDown'];
$dateStart = $_POST['dateStart'];
$dateEnd = $_POST['dateEnd'];
$money = $_POST['money'];
$tmp_autoOptions = json_encode($_POST['autoFillOptions']);
$autoFillOptions = "{autoFillOptions:".$tmp_autoOptions."}";
$questionList = $_POST['questionList'];


require_once 'firebaseConfig.php';

$service_Doc_data = [
    'creatorID' => $creatorID,
    'serviceName' => $serviceName,
    'introduction' => $summary,
    'targetAudience' => $target,
    'age' => $age,
    'ageUpDown' => $ageUpDown,
    'dateStart' => $dateStart,
    'dateEnd' => $dateEnd,
    'money' => $money,
    'autoFillOptions' => $autoFillOptions,
    'status' => 'unVerify',
    'posterImg' => 'none'
];

$addedDocRef_service = $db->collection('service')->add($service_Doc_data);
$service_doc_id = $addedDocRef_service->id();

for ($x = 0; $x < sizeof($questionList); $x++) {

    $tmp = $questionList[$x];
    $tmp2 = json_encode($tmp);
    $tmp3 = json_decode($tmp2);

    $question_index = $tmp3->question_index;
    $question_type = $tmp3->question_type;
    $question_self = $tmp3->question_self;
    $question_description = $tmp3->question_description;

    $question_Doc_data;
    $question_mc_option;
    if($question_type == "mc"){

        $question_mc_option = $tmp3->question_mcOption;

        $question_Doc_data = [
            'index' => $question_index,
            'type' => $question_type,
            'question' => $question_self,
            'description' => $question_description,
            'mcOption' => $question_mc_option
        ];

    } else {

        $question_Doc_data = [
            'index' => $question_index,
            'type' => $question_type,
            'question' => $question_self,
            'description' => $question_description
        ];

    }

    $addedDocRef_questions = $db->collection('service/' . $addedDocRef_service->id() . '/questions')->add($question_Doc_data);
}

echo $service_doc_id;
