<?php

class Queue extends multi_functions
{
  protected $table = "que_tb";

  public function __construct(Connection $db)
  {
    if(!isset($db->con)) return null;
    $this->db = $db;
  }

  public function getQueue()
  {
    $sql_c = "SELECT * FROM $this->table WHERE active = 1";
    return $this->checker($sql_c);
  }

  public function getDashboardData()
  {
    $sql_c = "SELECT * FROM $this->table INNER JOIN drivers_tb ON 
                $this->table.driver_id=drivers_tb.id WHERE que_tb.active=1";
    return $this->checker($sql_c);
  }
}