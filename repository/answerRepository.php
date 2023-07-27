<?php

class AnswerRepository 
{
    private PDO $db; // Instance de PDO

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getDb(): PDO
    {
        return $this->db;
    }

    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }

    public function findAllAnswers(): array
    {
        $query = 'SELECT * FROM answers';
        $result = $this->db->query($query);
        $answers = $result->fetchAll();
        $answerList = [];
    
        foreach ($answers as $answer) {
            $answerList[] = new Answer($answer);
        }
        return $answerList;
    }

    public function findAnswerById(int $id_qst) : array
    {
        $query = 'SELECT * FROM answers WHERE id_qst = :id_qst';
        $result = $this->db->prepare($query);
        $result->bindValue(':id_qst', $id_qst);
        $result->execute();
        $answer = $result->fetchAll();
        $listAnswers = [];
        foreach ($answer as $ans) {
            $listAnswers[] = new Answer($ans);
        }
        return $listAnswers;
        
    }



}