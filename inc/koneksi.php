<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "yamaha";

    class Database{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db = 'yamaha';

        private $dbh;
        private $error;
        private $stmt;

    public function __construct(){
    $dsn = 'mysql:host='. $this->host .';dbname'. $this->db;
    $options = array(
        PDO::ATTR_PERSISTENT     => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try {
        $this->dbh = new PDO($dsn,$this->user, $this->pass, $options);
    } catch (PDOException $e) {
        $this->error = $e->getMessage();
    }

    }

    public function getCon()
    {
        return $this->dbh;
    }

}
?>