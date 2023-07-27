<?php

require_once('./utils/loadClass.php');
require_once('./utils/db_connect.php');
// require_once('./class/qcm.php');

$answerRepo = new AnswerRepository($bdd);
$questionRepo = new QuestionRepository($bdd);
$qcmRepo = new QcmRepository($bdd);
// $qcm = $qcmRepo->FindAllQcm()[0];
$qcm = $qcmRepo->FindAllQcm()[1];


// var_dump($answerRepo->findAllAnswer());
// var_dump($questionRepo->findAllQuestions());



foreach ($questionRepo->findAllQuestions() as $question) {
    echo $question->getIntitule(). '<br>';

    $answers = $answerRepo->findAnswerById($question->getIdQst());
    foreach ($answers as $answer) {
        echo $answer->getAnswer(). '<br>';
    }
    echo '<br>';
} 