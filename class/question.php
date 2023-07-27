<?php

require_once('./utils/loadClass.php');


class   question
{
    private string $id_qst;
    private string $intitule;


    public function getId_qst()
    {
        return $this->id_qst;
    }


    public function setId_qst($id_qst)
    {
        $this->id_qst = $id_qst;

        return $this;
    }


    public function getIntitule()
    {
        return $this->intitule;
    }


    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function __construct(array $data)
    {
        $this->id_qst = $data['id_qst'];
        $this->intitule = $data['intitule'];   
    }
}
