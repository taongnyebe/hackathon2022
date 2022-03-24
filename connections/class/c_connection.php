<?php

class Connection
{
  protected $host = 'localhost';
  protected $user = 'root';
  protected $password = '';
  protected $database = 'hackathon';

  public $con = null;

  public function __construct()
  {
    $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    if ($this->con->connect_error)
    {
      echo "Fail Connection";
    }
  }

  public function __destruct()
  {
    $this->closeConnection();
  }

  protected function closeConnection()
  {
    if ($this->con != null){
      $this->con->close();
    }
  }
}