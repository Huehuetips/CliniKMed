<?php

require_once "Connection.php";

class Update_model {




    static public function Update_med( $Id_especialidad, $Razon_social_medico, $Activo_medico, $Nombre_medico, $Email_medico, $Colegiado_medico, $Direccion_medico, $Sexo_medico, $Telefono_medico,$Id_medico ) {

        $sql = "execute SpMedicos 'Upd',$Id_especialidad,'$Razon_social_medico',$Activo_medico,'$Nombre_medico','$Email_medico',$Colegiado_medico,'$Direccion_medico',$Telefono_medico,'$Sexo_medico', $Id_medico";
        // echo $sql;

        $stmt = Connection::connect()->prepare( $sql );

        $stmt -> execute ();

        $return = $stmt;
        
        $stmt = null;

        return $return;
    }
}