<?php

class DBConnection
{

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db_name = "cmbdb";

    public function __constructor()
    {
    }

    public function connect()
    {

        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
        return $connection;

    }

    public function close($connection)
    {
        mysqli_close($connection);
    }
}


?>