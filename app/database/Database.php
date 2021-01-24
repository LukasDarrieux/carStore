<?php

  namespace App\database;

  use PDOException;

  class Database {

    private const HOST = "localhost";
    private const USER = "root";
    private const PASSWORD = "";
    private const DATABASE = "carStore"; 

    public function __construct(){
      $this->setConnection();
    }

    private function setConnection(){
      try {
        $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::DATABASE,self::USER,self::PASSWORD);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        die('ERROR: '.$e->getMessage());
      }
    }
  }