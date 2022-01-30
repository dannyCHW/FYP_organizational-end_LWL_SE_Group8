<?php

$serviceName = $_POST['serviceName'];
$summary = $_POST['summary'];
$target = $_POST['target'];
$age = $_POST['age'];
$ageUpDown = $_POST['ageUpDown'];
$dateStart = $_POST['dateStart'];
$dateEnd = $_POST['dateEnd'];
$money = $_POST['money'];
$terms = $_POST['terms'];
$questionList = $_POST['questionList'];

$tmp = $questionList[0];
$tmp2 = json_encode($tmp);
$tmp3 = json_decode($tmp2);
$question_type = $tmp3->question_type;

echo "backFormPHP", $question_type;

require_once 'firebaseConfig.php';

$service_Doc_data = [
    'creatorID' => 'tmp_developer',
    'serviceName' => $serviceName,
    'introduction' => $summary,
    'targetAudience' => $target,
    'age' => $age,
    'ageUpDown' => $ageUpDown,
    'dateStart' => $dateStart,
    'dateEnd' => $dateEnd,
    'money' => $money,
    'terms' => $terms
];

$addedDocRef_service = $db->collection('service')->add($service_Doc_data);
$service_id = $addedDocRef_service->id();

for ($x = 0; $x < sizeof($questionList); $x++) {

    $tmp = $questionList[$x];
    $tmp2 = json_encode($tmp);
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

    $addedDocRef_questions = $db->collection('service/' . $addedDocRef_service->id() . '/questions')->add($question_Doc_data);

}

echo"backFormPHP: OK";


?>