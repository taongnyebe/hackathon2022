<?php

class Drivers extends multi_functions 
{
  protected $table = "drivers_tb";

  public function __construct(Connection $db)
  {
    if(!isset($db->con)) return null;
    $this->db = $db;
  }

  public function getDriversInfo() 
  {
    $sql_c = "SELECT * FROM $this->table WHERE active = 1";
    return $this->checker($sql_c);
  }

  public function updateDrivers($id)
  {
    
  }

  public function deleteDrivers($id)
  {
    
  }
}