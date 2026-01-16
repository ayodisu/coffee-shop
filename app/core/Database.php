<?php

class Database
{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $dbh;
    private $error;

    public function __construct()
    {
        // ENV
        $this->host = getenv('DB_HOST') ?: "localhost";
        $this->dbname = getenv('DB_NAME') ?: "coffeefy";
        $this->user = getenv('DB_USER') ?: "root";
        $this->pass = getenv('DB_PASS') ?: "";

        // DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // PDO
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql)
    {
        return $this->dbh->query($sql);
    }

    public function prepare($sql)
    {
        return $this->dbh->prepare($sql);
    }
}
