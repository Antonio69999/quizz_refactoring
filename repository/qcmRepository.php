<?php

class QcmRepository extends AbstractRepository
{
    public function findAllQcms(): array
    {
        $query = 'SELECT * FROM qcm';
        $result = $this->db->query($query);
        $qcmsDatas = $result->fetchAll();
        $qcms = [];
        foreach ($qcmsDatas as $qcmData) {
            $qcms[] = new Qcm($qcmData, $this->getDb());
        }
        return $qcms;
    }

    public function findOneQcm($idQcm): Qcm
    {
        $query = 'SELECT * FROM qcm WHERE id_qcm = :idQcm';
        $result = $this->db->prepare($query);
        $qcmData = $result->execute(['idQcm' => $idQcm]);
        $qcmData = $result->fetch(PDO::FETCH_ASSOC);
        return new Qcm($qcmData, $this->getDb());
    }
}

?>
