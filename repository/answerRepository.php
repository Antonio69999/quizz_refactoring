<?php

class answerRepository 
{
    private PDO $db; // Instance de PDO

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // public function createAnswers(answer $answer)
    // {
    //     $request = $this->db->prepare('INSERT INTO answers (answers, is_correct, id_qst) VALUES (:answer, :is_correct, :id_qst)');
    //     $request->execute([
    //         'answer' => $answer->getAnswer(),
    //         'is_correct' => $answer->getIs_Correct(),
    //         'id_qst' => $answer->getId_Qst()
    //     ]);
    // }

    public function findAllAnswer(): array
    {
        $query = 'SELECT * FROM answers';
        $result = $this->db->query($query);
        $answers = $result->fetchAll();
        $answer = [];

        foreach ($answers as $answer) {
                    $answer[] = new Answer($answer);
                }
        return $answer;
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