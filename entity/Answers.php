<?php

class Answers
{
    private int $idAnswers;
    private string $answer;
    private bool $isCorrect;

    
    public function __construct(array $answerData)
    {
        $this->idAnswers = $answerData['id_answers'];
        $this->answer = $answerData['answer'];
        $this->isCorrect = $answerData['is_correct'];
    }



    public function getIdAnswers() : int
    {
        return $this->idAnswers;
    }

    public function setIdAnswers($idAnswers) : self
    {
        $this->idAnswers = $idAnswers;

        return $this;
    }

    public function getAnswer() : string
    {
        return $this->answer;
    }

    public function setAnswer($answer) : self
    {
        $this->answer = $answer;

        return $this;
    }


    public function getIsCorrect() : bool
    {
        return $this->isCorrect;
    }

    public function setIsCorrect($isCorrect) : self
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }


}
