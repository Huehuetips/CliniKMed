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
        <form action="FormMedic.php" method="post" id="Form">   
            <h2>Agregar Médicos</h2>        
            <h4>

                           <!-- recordar colocar el autocomplete en off -->
                <table>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="Nombre_medico" maxlength="50" placeholder="Nombre" style="width: 290%;" required></td>   
                    </tr>

                    <tr>
                        <td>Razon Social</td>
                        <td><input type="text" name="Razon_social_medico" placeholder="Razón Social" required></td>
                    </tr>



                        <td>Especialidad</td>
                        <!-- <td><input type="number" name="Id_especialidad" min="1" max="4"  placeholder="Especialidad"></td>
                        -->

                        <td><select name="Id_especialidad" >
                                <option hidden selected value="" style="text-decoration-color: rgb(100, 100, 100, 2);">Especialidad</option>
                            </select></td>
                   

                        <td>Email</td>
                        <td><input type="email" name="Email_medico" placeholder="Email" required></td>
                    </tr>

                    <tr>
                        <td>Número de Colegiado</td>
                        <td><input type="number" name="Colegiado_medico" min="0000" max="9999" placeholder="No. de Colegiado" required></td>

                        <td>Número de Teléfono</td>
                        <td><input type="number" name="Telefono_medico" max="99999999" min="00000000" placeholder="Teléfono" required></td>
                    
                    </tr>


                    <tr>
                        <td>Sexo</td>
                        <td><select name="Sexo_medico" required>
                            <option hidden selected value=""></Sexo>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select></td>

                        <td>Activo</td>
                        <td><select name="Activo_medico" required>
                            <option hidden selected value="">Activo</option>
                            <option value=1>Si</option>
                            <option value=0>No</option>
                        </select></td>
                    </tr>



                    <!-- <input type="text" name="Direccion_medico" placeholder="Direccion" style="height: 100px;" required><br><br> -->

                    <tr>
                        <td>Direccion</td>
                        <td><textarea name="Direccion_medico" style="width: 150%; height: 40px;"></textarea></td>
                    </tr>

                    <br>Logo<br>
                    <input type="file" name="Logo_medico" id="file" accept="image/jpg,image/jpeg,image/png"><br><br>

                    <br>
                </table>
                    <button type="submit" id="submit" name="Submit_ins_med">Enviar</button>
                
            </h4>
        </form>

        <!-- <script type="text/javascript" src="../JS/evitar_reenvio.js"></script> -->
    


            
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
