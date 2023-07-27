<?php

require_once('./utils/loadClass.php');


class   Question
{
    private int $idQst;
    private string $intitule;
    private array $answers;
    private AnswerRepository $answerRepository;

    public function __construct(array $data, PDO $db)
    {
        $this->idQst = $data['id_qst'];
        $this->intitule = $data['intitule'];
        $this->answerRepository = new AnswerRepository($db);
        $this->answers = $this->answerRepository->findAllAnswers('id_qst', $this->idQst);   
    }
    

    public function getIdQst()
    {
        return $this->idQst;
    }


    public function setIdQst($id_qst)
    {
        $this->idQst = $id_qst;

        return $this;
    }


    public function getIntitule()
    {
        return $this->intitule;
    }


    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getAnswers()
    {
        return $this->answers;
    }

    public function setAnswers($answers)
    {
        $this->answers = $answers;

        return $this;
    }



    public function getAnswerRepository()
    {
        return $this->answerRepository;
    }

    public function setAnswerRepository($answerRepository)
    {
        $this->answerRepository = $answerRepository;

        return $this;
    }

    
}
