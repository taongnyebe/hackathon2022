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
                LEFT JOIN toda_driver_tb ON $this->table.id=toda_driver_tb.toda_id";
    return $this->checker($sql_c);
  }

  public function addToda($name, $route_1, $route_2, $fee)
  {
    $sql_c = "INSERT INTO $this->table (toda_name, route_1, route_2, fee, active) 
                VALUES ('$name', '$route_1', '$route_2', $fee, 1)";
    mysqli_query($this->db->con, $sql_c);
  }
}