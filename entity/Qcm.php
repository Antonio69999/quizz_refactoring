<?php

class Qcm 
{
    private int $idQcm;
    private array $questions;
    private QuestionRepository $questionsRepo;

    public function __construct(array $qcmData, PDO $pdo)
    {
        $this->idQcm = $qcmData['id_qcm'];
        $this->setQuestionsRepo($pdo);
        $this->setQuestions($this->getQuestionsRepo()->findQuestionsByIdQcm($this->idQcm));
    }

    /**
     * Get the value of idQcm
     */ 
    public function getIdQcm()
    {
        return $this->idQcm;
    }

    /**
     * Set the value of idQcm
     *
     * @return  self
     */ 
    public function setIdQcm($idQcm)
    {
        $this->idQcm = $idQcm;

        return $this;
    }

    /**
     * Get the value of questions
     */ 
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set the value of questions
     *
     * @return  self
     */ 
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get the value of questionsRepo
     */ 
    public function getQuestionsRepo()
    {
        return $this->questionsRepo;
    }

    /**
     * Set the value of questionsRepo
     *
     * @return  self
     */ 
    public function setQuestionsRepo($questionsRepo)
    {
        $this->questionsRepo = $questionsRepo;

        return $this;
    }
}