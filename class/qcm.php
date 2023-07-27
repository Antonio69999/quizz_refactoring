<?php 

require_once('./utils/loadClass.php');

class   Qcm 
{
    private int $idQcm;
    private array $questions;
    private QuestionRepository $questionRepository;

    public function __construct(array $data, PDO $db)
    {
        $this->idQcm = $data['id_qcm'];
        // $this->questions = $data['intitule'];
        $this->questionRepository = new QuestionRepository($db);
        $this->questions = $this->questionRepository->findAllQuestions('id_qcm', $this->idQcm);
    }

    public function getQuestions()
    {
        return $this->questions;
    }
 
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    public function getId_qcm()
    {
        return $this->idQcm;
    }

    public function setId_qcm($id_qcm)
    {
        $this->idQcm = $id_qcm;

        return $this;
    }

    public function getQuestionRepository()
    {
        return $this->questionRepository;
    }

    public function setQuestionRepository($questionRepository)
    {
        $this->questionRepository = $questionRepository;

        return $this;
    }

    // public function generateQcm() : array
    // {
        
    // }
}