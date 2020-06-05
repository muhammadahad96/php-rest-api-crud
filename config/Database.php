<?php

class Database
{
  // DB Params
  private $host = 'localhost';
  private $db_name = 'myblog';
  private $user = 'root';
  private $password = '';
  private $conn;

  public function connect()
  {
    $this->conn = null;

    try {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
      $this->conn = new PDO($dsn, $this->user, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'Connection Error: ' . $e->getMessage();
    }

    return $this->conn;
  }
}
