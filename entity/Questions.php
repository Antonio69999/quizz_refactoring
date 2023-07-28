<?php

class Questions
{
    private int $idQst;
    private string $intitule;
    private array $answers;
    private AnswersRepository $answersRepo;
    

    public function __construct(array $questionData, PDO $pdo)
    {
        $this->idQst = $questionData['id_qst'];
        $this->intitule = $questionData['intitule'];
        $this->setAnswersRepo($pdo);
        $this->setAnswers($this->getAnswersRepo()->findAnswersByIdQuestion($this->idQst));
    }

    

    /**
     * Get the value of idQst
     */ 
    public function getIdQst() : int
    {
        return $this->idQst;
    }

    /**
     * Set the value of idQst
     *
     * @return  self
     */ 
    public function setIdQst($idQst) : self
    {
        $this->idQst = $idQst;

        return $this;
    }



    /**
     * Get the value of intitule
     */ 
    public function getIntitule() : string
    {
        return $this->intitule;
    }

    /**
     * Set the value of intitule
     *
     * @return  self
     */ 
    public function setIntitule($intitule) : self
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get the value of answersRepo
     */ 
    public function getAnswersRepo()
    {
        return $this->answersRepo;
    }

    /**
     * Set the value of answersRepo
     *
     * @return  self
     */ 
    public function setAnswersRepo($answersRepo)
    {
        $this->answersRepo = $answersRepo;

        return $this;
    }

    /**
     * Get the value of answers
     */ 
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set the value of answers
     *
     * @return  self
     */ 
    public function setAnswers($answers)
    {
        $this->answers = $answers;

        return $this;
    }
}