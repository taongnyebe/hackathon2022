<?php

class Incident extends multi_functions
{
    protected $table = "incident_tb";

    public function __construct(Connection $db)
    {
      if(!isset($db->con)) return null;
      $this->db = $db;
    }

    public function getIncidents()
    {
        $sql_c = "SELECT * FROM $this->table";
        return $this->checker($sql_c);
    }
}