<?php

require_once "Connection.php";

class Select
{

    public static function Sel_mast_table($TIPO_SELECT, $WHERE1, $WHERE2)
    {

        if (!empty($WHERE1)) {
            $WHERE1=", '"."$WHERE1"."'";
        }
        if (!empty($WHERE2)) {
            $WHERE2=", '"."$WHERE2"."'";
        }
 

        $sql = " EXECUTE SpMasterTable '$TIPO_SELECT' $WHERE1 $WHERE2 ";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }


    public static function Sel_edit($TIPO_SELECT, $WHERE1, $WHERE2)
    {

        if (!empty($WHERE1)) {
            $WHERE1=", '"."$WHERE1"."'";
        }
        if (!empty($WHERE2)) {
            $WHERE2=", '"."$WHERE2"."'";
        }
 

        $sql = " EXECUTE SpEditTable '$TIPO_SELECT' $WHERE1 $WHERE2 ";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }
}
