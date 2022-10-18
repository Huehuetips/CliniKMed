<?php

require_once "Connection.php";

class Ins_model {




    static public function Ins_med( $Id_especialidad, $Razon_social_medico, $Activo_medico, $Nombre_medico, $Email_medico, $Colegiado_medico, $Direccion_medico, $Sexo_medico, $Telefono_medico ) {

        $sql = "execute SpCreaMedicos 'InMed',$Id_especialidad,'$Razon_social_medico',$Activo_medico,'$Nombre_medico','$Email_medico',$Colegiado_medico,'$Direccion_medico',$Telefono_medico,'$Sexo_medico'";

        $stmt = Connection::connect()->prepare( $sql );

        $stmt -> execute ();

        $return = $stmt;
        
        $stmt = null;

        return $return;
    }





    static public function Ins_lab($Nombre_laboratorio,$Telefono_laboratorio,$Contacto_laboratorio,$Email_laboratorio,$Direccion_laboratorio) {

        $sql = "execute SpLaboratorios 'InsLab', '$Nombre_laboratorio','$Direccion_laboratorio',$Telefono_laboratorio,'$Contacto_laboratorio','$Email_laboratorio'";

        $stmt = Connection::connect()->prepare( $sql );

        $stmt -> execute ();

        $return = $stmt;
        
        $stmt = null;

        return $return;
    }





    static public function Ins_pres($Nombre_presentacion) {

        $sql = "execute SpPresentaciones 'InsTPre', '$Nombre_presentacion'";

        $stmt = Connection::connect()->prepare( $sql );

        $stmt -> execute ();

        $return = $stmt;
        
        $stmt = null;

        return $return;
    }




    static public function Ins_com($Nombre_formula,$Componente_formula) {

        $sql = "execute SpPresentaciones 'InsTPre', '$Nombre_formula',$Componente_formula";

        $stmt = Connection::connect()->prepare( $sql );

        $stmt -> execute ();

        $return = $stmt;
        
        $stmt = null;

        return $return;
    }



}