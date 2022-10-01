<?php

require_once "Connection.php";

class Sel_model
{

    public static function Sel_data($TIPO_SELECT, $WHERE1, $WHERE2)
    {

        if (!empty($WHERE1)) {
            $WHERE1=", '"."$WHERE1"."'";
        }
        if (!empty($WHERE2)) {
            $WHERE2=", '"."$WHERE2"."'";
        }
 

        $sql = " EXECUTE SpSelectTabla '$TIPO_SELECT' $WHERE1 $WHERE2 ";

        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }
}
