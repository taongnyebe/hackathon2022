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
    $sql_c = "SELECT *, drivers_tb.id AS d_id, $this->table.id AS m_id FROM $this->table INNER JOIN drivers_tb ON 
                $this->table.driver_id=drivers_tb.id WHERE que_tb.active=1";
    return $this->checker($sql_c);
  }

  public function addQueue($id)
  {
    $time = time();
    $sql_c = "INSERT INTO $this->table (driver_id, dateTime, active) VALUES ($id, $time, 1)";
    return mysqli_query($this->db->con, $sql_c);
  }
}