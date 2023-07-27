<?php

class QuestionRepository
{
    private PDO $db;

    public function getDb()
    {
        return $this->db;
    }

    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findAllQuestions(): array
    {
        $query = 'SELECT * FROM questions';
        $result = $this->db->query($query);
        $questions = $result->fetchAll();
        $questionList = [];

        foreach ($questions as $question) {
            $questionList[] = new Question($question, $this->db);
        }
    
        return $questionList;
    }

}