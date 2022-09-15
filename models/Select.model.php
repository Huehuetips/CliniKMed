<?php

require_once "Connection.php";

class Sel_model
{

    public static function Sel_data($TIPO_SELECT)
    {

        $sql = " EXECUTE SpSelectTabla '$TIPO_SELECT'";

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }
}
