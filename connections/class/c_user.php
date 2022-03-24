<?php

class Login extends multi_functions 
{
  protected $username;
  protected $password;
  protected $db;
  protected $table = "user_tb";

  protected $sql_t = "CREATE TABLE `user_tb` (
                        `id` int(11) NOT NULL,
                        `username` varchar(255) NOT NULL,
                        `email` varchar(255) NOT NULL,
                        `password` varchar(255) NOT NULL,
                        `active` varchar(255) NOT NULL,
                        PRIMARY KEY (`id`)
                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

  protected $sql_i = "INSERT INTO user_tb SET username='admin', password='admin',email='admin@gmail.com', active='1'";

  public function __construct(Connection $db)
  {
        if(!isset($db->con)) return null;
        $this->db = $db;
  }

  public function getUserPassword($username, $password)
  {
        if ($this->tablechecker())
        {
              if ($username != null && $password != null)
              {
                    $this->username = $username;
                    $this->password = $password;
              }

              return $this->checkUser();
        }

        return 10;
  }

  private function checkUser()
  {
        if ($connection = mysqli_query($this->db->con, "SELECT * FROM $this->table 
                                                        WHERE username='$this->username' AND active=1"))
        {
              if ($userdata = mysqli_fetch_assoc($connection)) {
                    if ($userdata['password'] == $this->password) 
                          $this->result = 0;
                    else
                          $this->result = 1;
  
              } else
                    $this->result = 2;
        } else
              $this->result = 502;   
  }
}