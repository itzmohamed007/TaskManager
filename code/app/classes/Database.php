<?php

/*
  *Database Class
  *Connect to database
*/

class Database {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $dbname = DB_NAME;

  private $dbh;

  public function connection(){
    $this->dbh = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
    if (!$this->dbh) {
      return false;
    }
    return $this->dbh;
  }
}