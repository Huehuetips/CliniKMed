<?php

require_once "Connection.php";

class Sel_model
{

    public static function Sel_data($TIPO_SELECT, $WHERE)
    {

        if (!empty($WHERE)) {
            $WHERE=", '"."$WHERE"."'";
        }
 

        $sql = " EXECUTE SpSelectTabla '$TIPO_SELECT' $WHERE ";

        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }
}
