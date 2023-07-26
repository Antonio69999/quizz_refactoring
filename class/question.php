<?php

require_once('./utils/loadClass.php');


class   question
{
    private string $question;
    private string $explaination;
    private array $answers;

    
    //Get the value of question//
    public function getQuestion()
    {
        return $this->question;
    }

    //Get the value of explaination//
    public function getExplaination()
    {
        return $this->explaination;
    }

    public function setExplaination($explaination)
    {
        $this->explaination = $explaination;

        return $this;
    }

    //Get the value of answers//
    public function getAnswers()
    {
        return $this->answers;
    }


    public function __construct(string $question, string $explaination)
    {
        $this->question = $question;
        // $this->explaination = $explaination;
    }

    public function addAnswer(answer $answer)
    {
        $this->answers[] = $answer;
    }


}
