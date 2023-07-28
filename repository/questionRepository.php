<?php

class QuestionRepository extends AbstractRepository
{
    public function findAllQuestions(): array
    {
        $query = 'SELECT * FROM questions';
        $result = $this->db->query($query);
        $questionsDatas = $result->fetchAll();
        $questions = [];
        foreach ($questionsDatas as $questionData) {
            $questions[] = new Questions($questionData, $this->getDb());
        }
        return $questions;
    }

    public function findOnequestion($idQst): Questions
    {
        $query = 'SELECT * FROM questions WHERE id_qst = :idQuestion';
        $result = $this->db->prepare($query);
        $questionData = $result->execute(['idQuestion' => $idQst]);
        $questionData = $result->fetch(PDO::FETCH_ASSOC);
        return new Questions($questionData, $this->getDb());
    }

    public function findQuestionsByIdQcm($idQcm): array
    {
        $query = 'SELECT questions.* /*get all from questions table*/
                  FROM questions, contain  /*which table it needs*/
                  WHERE questions.id_qst = contain.id_qst
                  AND contain.id_qcm = :idQcm';
        $result = $this->db->prepare($query);
        $result->execute(['idQcm' => $idQcm]);
        $questionDatas = $result->fetchAll(PDO::FETCH_ASSOC);
        $questions = [];
        foreach ($questionDatas as $questionData) {
            $questions[] = new Questions($questionData, $this->getDb());
        }
        return $questions;
    }
}
