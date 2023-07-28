<?php

abstract class AbstractRepository
{
    protected PDO $db; // Instance de PDO

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
}