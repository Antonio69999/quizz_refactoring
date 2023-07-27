<?php

class QcmRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    public function FindOneQcm(int $idQcm): Qcm
    {
        $query = 'SELECT * FROM qcm WHERE id_qcm = :idQcm';
        $result = $this->db->prepare($query);
        $result->bindValue(':id_qst', $idQcm);
        $result->execute();
        $qcm = $result->fetchAll();

        var_dump($qcm);

        return new Qcm($qcm, $this->db);
    }

    public function FindAllQcm(): array
    {
        $query = 'SELECT * FROM qcm';
        $result = $this->db->prepare($query);
        $result->execute();
        $qcms = $result->fetchAll();
        $ListQcms = [];

        foreach ($qcms as $qcm) {
            $ListQcms[] = new Qcm($qcm, $this->db);
        }

        return $ListQcms;
    }
}
