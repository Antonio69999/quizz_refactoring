<?php

require_once('./utils/loadClass.php');

class   answer
{
    private int $id_answers;
    private string $answer;
    private bool $is_correct;
    private int $id_qst;

    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set the value of answer
     *
     * @return  self
     */ 
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get the value of is_correct
     */ 
    public function getIs_correct()
    {
        return $this->is_correct;
    }

    /**
     * Set the value of is_correct
     *
     * @return  self
     */ 
    public function setIs_correct($is_correct)
    {
        $this->is_correct = $is_correct;

        return $this;
    }

    /**
     * Get the value of id_qst
     */ 
    public function getId_qst()
    {
        return $this->id_qst;
    }

    /**
     * Set the value of id_qst
     *
     * @return  self
     */ 
    public function setId_qst($id_qst)
    {
        $this->id_qst = $id_qst;

        return $this;
    }

    /**
     * Get the value of id_answers
     */ 
    public function getId_answers()
    {
        return $this->id_answers;
    }

    /**
     * Set the value of id_answers
     *
     * @return  self
     */ 
    public function setId_answers($id_answers)
    {
        $this->id_answers = $id_answers;

        return $this;
    }

    public function __construct (array $data)
    {
        $this->id_answers = $data['id_answers'];
        $this->answer = $data['answer'];
        $this->is_correct = $data['is_correct'];
        $this->id_qst = $data['id_qst'];
    }

    // public function createAnswer(array $data)
    // {
    //     if (isset($data['id_answers'])) {
    //         $this->setId_answers("id_answers");
    //     }

    //     if (isset($data['answer'])) {
    //         $this->setAnswer("answer");
    //     }

    //     if (isset($data['is_correct'])) {
    //         $this->setIs_correct("is_correct");
    //     }

    //     if (isset($data['id_qst'])) {
    //         $this->setId_qst("id_qst");
    //     }


    // }

}
