<?php

require_once "Connection.php";

class Ins_model {

    static public function Ins_data( $Id_especialidad, $Razon_social_medico, $Activo_medico, $Nombre_medico, $Email_medico, $Logo_medico, $Colegiado_medico, $Direccion_medico, $Sexo_medico, $Telefono_medico ) {

        $sql = "execute SpCreaMedicos 'InMed',$Id_especialidad,'$Razon_social_medico',$Activo_medico,'$Nombre_medico','$Email_medico',$Logo_medico,$Colegiado_medico,'$Direccion_medico',$Telefono_medico,'$Sexo_medico'";

        $stmt = Connection::connect()->prepare( $sql );

        $stmt -> execute ();

        echo ( $stmt );

        return $stmt;
    }
}