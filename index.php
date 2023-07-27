<?php

require_once('./utils/loadClass.php');
require_once('./utils/db_connect.php');
// require_once('./class/qcm.php');

$answerRepo = new AnswerRepository($bdd);
$questionRepo = new QuestionRepository($bdd);

foreach ($questionRepo->findAllQuestions() as $question) {
    echo $question->getIntitule();
    foreach ($answer->getAnswer() as $answer) {
        echo $answer->getAnswer();
    }

}

// var_dump($answerRepo->findAllAnswer());
// var_dump($questionRepo->findAllQuestions());





// $qcm = new qcm();

// // var_dump($qcm);
// // var_dump($question);

// $question1 = new question('What is your name?', 'your name');

// $question1->addAnswer(new answer('your name', true));

// $question1->addAnswer(new answer('age', false));

// $question1->addAnswer(new answer('gender', false));

// // $question1->setExplaination('..');

// $qcm->addQuestion($question1);

// // $qcm->generate();
// foreach ($qcm->getQuestions() as $index => $question) {
//     echo "Question " . ($index + 1) . ": " . $question->getQuestion();
//     foreach ($question->getAnswers() as $answer) {
//         echo "<br> " . $answer->getText() . "<br>";
//     }
// }