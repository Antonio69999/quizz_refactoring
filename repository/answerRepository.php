<?php

class answerRepository 
{
    private PDO $db; // Instance de PDO

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findAllAnswer(): array
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

    public function getDb(): PDO
    {
        return $this->db;
    }

    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }

}


