<?php

class Connection
{

    public static function connect()
    {

        $host = 'localhost';
        $database = 'CliniKMed';
        $user = 'Adony';
        $pass = 'root';
        $port = 1433;

        try {
            $link = new PDO("sqlsrv:Server=$host,$port;database=$database", $user, $pass);
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die("Base de datos ". $database . "<br>" ."ERROR:".$e->getMessage());
        }
        
        return $link;
    }
}
