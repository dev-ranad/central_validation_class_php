<?php
class Database
{
    protected $connector;

    public function __construct()
    {
        $hostname = "localhost";
        $database = "database_name";
        $username = "root";
        $password = "";

        $this->connector = mysqli_connect($hostname, $username, $password, $database);

        if (!$this->connector) {
            die("Database Connection Error!");
        }
    }
}
