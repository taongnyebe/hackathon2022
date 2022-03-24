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

  public function updateTODA()
  {

  }

  public function deleteTODA()
  {
    
  }
}