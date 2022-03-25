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

  public function addDriver($fname, $mname, $lname, $suffix, $plate, $todaid)
  {
    $sql_c = "INSERT INTO $this->table (tricycle_id, f_name, m_name, l_name, suffix, plate, toda_address, active)
               VALUE ('$todaid', '$fname', '$mname', '$lname', '$suffix', '$plate', 'Address 1', 1)";
    mysqli_query($this->db->con, $sql_c);
  }
}