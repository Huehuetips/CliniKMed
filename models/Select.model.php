<?php

require_once "Connection.php";

class Select
{

    public static function Sel_med($TIPO)
    {
 

        $sql = " EXECUTE SpMedicos '$TIPO','','','','','','','','',''";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }

    public static function Sel_login($TIPO,$user,$pass)
    {
 

        $sql = " EXECUTE SpLogin'$TIPO',$user,$pass";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }


    public static function Sel_med_where($TIPO_SELECT, $WHERE1)
    {

        $sql = " EXECUTE SpMedicos '$TIPO_SELECT','','','','','','','','','','','','$WHERE1' ";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }


    public static function Sel_sex_where($TIPO_SELECT, $WHERE1)
    {

        $sql = " EXECUTE SpSexo '$TIPO_SELECT','','','$WHERE1' ";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }


    public static function Sel_esp_where($TIPO_SELECT, $WHERE1)
    {

        $sql = " EXECUTE SpEspecialidades '$TIPO_SELECT','','$WHERE1' ";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }

    public static function Sel_especialidades($TIPO_SELECT)
    {


        $sql = " EXECUTE SpEspecialidades '$TIPO_SELECT'";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }

    public static function Sel_sexo($TIPO_SELECT)
    {


        $sql = " EXECUTE SpSexo '$TIPO_SELECT'";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }

    public static function Sel_Componentes($TIPO_SELECT)
    {


        $sql = " EXECUTE SpComponentes '$TIPO_SELECT','','',''";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }

    public static function Sel_medidas($TIPO_SELECT)
    {


        $sql = " EXECUTE SpMedidas '$TIPO_SELECT'";
        // echo $sql;

        $stmt = Connection::connect()->prepare($sql);

        $stmt -> execute();

        $return = $stmt;
        
        $stmt = null;

        return $return -> fetchAll(PDO::FETCH_CLASS);
    }
}
