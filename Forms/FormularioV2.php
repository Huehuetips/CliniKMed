<!DOCTYPE html>
<!-- llama al encabezado -->    
<?php
    include('Styles\HEADERV2.html');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>



<body>

              <!-- Interfaz de formulario de Medicos-->
              <!-- quitar el autocomplete -->
    
    <form action="FormMedic.php" method="post" id="Form">   
        <center>
            <u><h3 style="margin: 1rem;">REGISTRO DE MEDICOS</h3></u>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>NOMBRE</b><br>
                            <input type="text" class="form-control" name="Nombre_medico" malgength="50"  required>
                        </div>
                    </div><br>
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>RAZON SOCIAL</b><br>
                            <input type="text" class="form-control" name="Razon_social_medico" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>EMAIL</b> <br>
                            <input type="email" class="form-control" name="Email_medico" required>
                        </div>
                    </div><br><br>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">

                            <b>ESPECIALIDAD</b> <br>
                            <select name="Activo_medico" class="form-control" style="height: 38px;">
                                <option hidden selected value=""></option>
                            </select>
                        
                        </div>
                    </div><br><br>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            *<b>SEXO</b> <br>
                            <select name="Sexo_medico" class="form-control" style="height: 38px;" required>
                                <option hidden selected value=""></Sexo>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>
                    </div><br><br>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            *<b>NUMERO DE COLEGIADO</b><br>
                            <input type="number" name="Colegiado_medico" class="form-control" required>
                        </div>
                    </div><br><br>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            *<b>NUMERO DE TELEFONO</b> <br>
                            <input type="number" name="Telefono_medico" class="form-control" required>
                        </div>
                    </div><br><br>
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            <b>LOGO</b><br>
                            <input type="file" name="Logo_medico" class="form-control" id="file" accept="image/jpg,image/jpeg,image/png">
                        </div>
                    </div><br><br>
                    <div class="col-lg-12">
                        <div style="margin: 10px;">
                            <b>DIRECCION</b><br>
                            <input type="text" name="Direccion_medico" class="form-control" style="height: 40px;">
                        </div>
                    </div>
                </div><br><br>
                <div class="row">
                    <center>
                        <button type="submit" id="submit" name="Submit_ins_med" class="btn btn-dark btn-sm" style="width: 90px; height: 45px;">GUARDAR</button>
                    </center>
                </div>
                <br> 
            </div>
        </center>
    </form>
<!--     <aside>
        <nav id="aside">
            <div class="row">
                <ul id="TITULO">
                    <br>
                    <li>
                        <a href="index.php">
                            AGREGAR
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                            BUSCAR
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                            MODIFICAR
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                            ELIMINAR
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        
    </aside>

    <div class="clearfix"></div>-->

<!--     <footer>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">

                    <h5>CONTACTO</h5>
                    <h6 style="padding-top: 5px; padding-left: 20px;">Numero: 64868956</h6>        
                    <h6 style="padding-left: 20px;">Correo: CliniKMed@CliniKMed.com</h6>
                    
                    <h5>TERMINOS Y CONDICIONES</h5>

                    <h5>POLITICA DE PRIVACIDAD</h5>  
                    <br><br>

                </div> 
                <div class="col-lg-4" style="text-align: justify-all;">
                    Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Enim quo eaque exercitationem aspernatur vitae accusamus deleniti. Et distinctio hic assumenda odio adipisci nam error omnis obcaecati esse natus officiis ad rerum, blanditiis dicta sunt. Odit, deserunt! Adipisci qui iusto inventore omnis aperiam vel, praesentium at explicabo quae, tempore illum vero.
                </div>   
            </div>
        </div>
    </footer>  -->


    <script>
        if (window.history.replaceState) {
            console.log("")
            window.history.replaceState(null,null,window.location.href)
        }
    </script>

</body>
        
        <!--  envío y recepcion de datos a models/Get.model.php para conección y operaciones con bases de datos  -->
<?php

if (isset($_POST['Submit_ins_med'])) {
    $Nombre_medico = isset($_POST['Nombre_medico']) ? $_POST['Nombre_medico'] : "";

    $Id_especialidad = isset($_POST['Id_especialidad']) ? $_POST['Id_especialidad'] : "";
        
    $Razon_social_medico = isset($_POST['Razon_social_medico']) ? $_POST['Razon_social_medico'] : "";
        
    $Activo_medico = 1;
        
    $Email_medico = isset($_POST['Email_medico']) ? $_POST['Email_medico'] : "";
        
    $Colegiado_medico = isset($_POST['Colegiado_medico']) ? $_POST['Colegiado_medico'] : "";
        
    $Telefono_medico = isset($_POST['Telefono_medico']) ? $_POST['Telefono_medico'] : "";
        
    $Sexo_medico = isset($_POST['Sexo_medico']) ? $_POST['Sexo_medico'] : "";
        
    $Direccion_medico = isset($_POST['Direccion_medico']) ? $_POST['Direccion_medico'] : "";
        
    $Logo_medico = isset($_POST['Logo_medico']) ? $_POST['Logo_medico'] :"";
        
    if (empty($Logo_medico)) {
        $Logo_medico="null";
    }
    if (empty($Id_especialidad)) {
        $Id_especialidad="null";
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
