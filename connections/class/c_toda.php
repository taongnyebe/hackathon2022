<?php

class Toda extends multi_functions
{
  protected $table = "toda_tb";

  public function __construct(Connection $db)
  {
    if(!isset($db->con)) return null;
    $this->db = $db;
  }
  
  public function getTODAInfo() 
  {
    $sql_c = "SELECT * FROM $this->table WHERE active = 1";
    return $this->checker($sql_c);
  }

  public function getDashboardData()
  {
    $sql_c = "SELECT $this->table.*, COUNT(toda_driver_tb.id) AS count FROM $this->table 
                INNER JOIN toda_driver_tb ON $this->table.id=toda_driver_tb.toda_id 
                WHERE $this->table.active=1";
    return $this->checker($sql_c);
  }

  public function updateTODA()
  {

  }

  public function deleteTODA()
  {
    
  }
}