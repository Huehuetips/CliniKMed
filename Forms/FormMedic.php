<!DOCTYPE html>
<!-- llama al encabezado -->    
<?php
    include('Styles\HEADER.html');
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>




<body id="Formresp">

    <!-- Interfaz de formulario de Medicos-->
    <center>
        <form action="FormMedic.php" method="post" id="Form" >   
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            NOMBRE<br>
                            <input type="text" class="form-control" name="Nombre_medico" maxlength="50"  required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            RAZON SOCIAL<br>
                            <input type="text" class="form-control" name="Razon_social_medico" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            ESPECIALIDAD <br>
                            <select name="Activo_medico" class="form-control" style="height: 30px;" required>
                                <option hidden selected value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            EMAIL <br>
                            <input type="email" class="form-control" name="Email_medico" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            NUMERO DE COLEGIADO<br>
                            <input type="number" name="Colegiado_medico" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            NUMERO DE TELEFONO <br>
                            <input type="mumber" name="Telefono_medico" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            SEXO <br>
                            <select name="Sexo_medico" class="form-control" required>
                                <option hidden selected value=""></Sexo>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            ACTIVO <br>
                            <select name="Activo_medico" class="form-control" required>
                                <option value=1>Si</option>
                                <option value=0>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            LOGO<br>
                            <input type="file" name="Logo_medico" class="form-control" id="file" accept="image/jpg,image/jpeg,image/png">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <center>
                        <button type="submit" id="submit" name="Submit_ins_med" class="btn btn-dark btn-sm" style="width: 90px; height: 45px;">Enviar</button>
                    </center>
                </div>
                <br> 
            </div>
        </form>

        <script type="text/javascript" src="../JS/evitar_reenvio.js"></script>
    


            
            <!--  envío y recepcion de datos a models/Get.model.php para conección y operaciones con bases de datos  -->
    <?php

    if (isset($_POST['Submit_ins_med'])) {
        $Nombre_medico = isset($_POST['Nombre_medico']) ? $_POST['Nombre_medico'] : "";

        $Id_especialidad = isset($_POST['Id_especialidad']) ? $_POST['Id_especialidad'] : "";
            
        $Razon_social_medico = isset($_POST['Razon_social_medico']) ? $_POST['Razon_social_medico'] : "";
            
        $Activo_medico = isset($_POST['Activo_medico']) ? $_POST['Activo_medico'] : "";
            
        $Email_medico = isset($_POST['Email_medico']) ? $_POST['Email_medico'] : "";
            
        $Colegiado_medico = isset($_POST['Colegiado_medico']) ? $_POST['Colegiado_medico'] : "";
            
        $Telefono_medico = isset($_POST['Telefono_medico']) ? $_POST['Telefono_medico'] : "";
            
        $Sexo_medico = isset($_POST['Sexo_medico']) ? $_POST['Sexo_medico'] : "";
            
        $Direccion_medico = isset($_POST['Direccion_medico']) ? $_POST['Direccion_medico'] : "";
            
        $Logo_medico = isset($_POST['Logo_medico']) ? $_POST['Logo_medico'] :"";
            
        if (empty($Logo_medico)) {
            $Logo_medico="null";
        }
        
            
            /*==============================
                     Mostrar errores
            ==============================*/

        ini_set('display_error', 1);
        ini_set("log_errors", 1);
        ini_set("error_log", "C:/xampp/htdocs/APIREST/php_error_log");

            /*============================
                        Requerimientos
            ============================*/

        require_once "models/Insert.model.php";
        $response =Ins_model::Ins_data($Id_especialidad, $Razon_social_medico, $Activo_medico, $Nombre_medico, $Email_medico, $Logo_medico, $Colegiado_medico, $Direccion_medico, $Sexo_medico, $Telefono_medico);
        if ($response==true) {
            echo '<script>', 'alert("El registro ha sido ingresado con éxito");', '</script>';
        }


        return;
    }
    ?>
    </center>



</body>
