<?php 

require_once('./utils/loadClass.php');

class   qcm 
{
    private array $questions;

    public function __construct() 
    {
        $this->questions = [];
    }

    public function addQuestion($question) 
    {
            $this->questions[] = $question;
    }

    public function getQuestions() 
    {
        return $this->questions;
    }

}