<?php

require_once('./utils/dbConnect.php');
require_once('./utils/loadClass.php');

$qcmRepository = new QcmRepository($bdd);
// $questionRepository = new QuestionRepository($bdd);
// $answerRepository = new AnswersRepository($bdd);

    $qcm1 = $qcmRepository->findAllQcms()[0];
    // var_dump($qcm1);
    $questions = $questionRepository->findQuestionsByIdQcm($qcm1->getIdQcm());
    // var_dump($questions);
    foreach ($questions as $question) {
        echo "Question :" . $question->getIntitule() . "<br>";
        $answers = $answerRepository->findAnswersByIdQuestion($question->getIdQst());
        foreach ($answers as $answer) {
         var_dump($answer);
        }
    }
    



 ?>