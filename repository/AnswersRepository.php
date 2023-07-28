<?php

class AnswersRepository extends AbstractRepository //herite de l'atribut PDO $db d' AbstractRepository
{
    public function findAllAnswers() : array
    {
        $query = 'SELECT * FROM answers';
        $result = $this->db->query($query);
        $answerDatas = $result->fetchAll();
        $answers = [];
        foreach ($answerDatas as $answerData) {
            $answers[] = new Answers($answerData);
        }
        return $answers;
    }

    public function findOneAnswer($idAnswers) : Answers
    {
        $query = 'SELECT * FROM answers WHERE id_answers = :idAnswers';
        $result = $this->db->prepare($query);
        $answerData = $result->execute(['idAnswers' => $idAnswers]);
        $answerData = $result->fetch(PDO::FETCH_ASSOC);
        return new Answers($answerData);
    }

    public function findAnswersByIdQuestion($idQuestion) : array
    {
        $query = 'SELECT * FROM answers WHERE id_qst = :idQuestions';
        $result = $this->db->prepare($query);
        $result->execute(['idQuestions' => $idQuestion]);
        $answerDatas = $result->fetchAll(PDO::FETCH_ASSOC);
        $answers = [];
        foreach ($answerDatas as $answerData) {
            $answers[] = new Answers($answerData);
        }
        return $answers;
    }
     
}