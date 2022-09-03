<?php

class Connection {

    static public function connect() {

        $host = 'localhost';
        $database = 'CliniKMed';
        $user = 'Adony';
        $pass = 'root';
        $port = 1433;

        try {

            $link = new PDO(
                "sqlsrv:Server=$host,$port;database=$database", $user, $pass );

            } catch( PDOException $e )

            {

                die( "Base de datos ". $database . "<br>" ."ERROR:".$e->getMessage() );

            }

            return $link;
        }
    }