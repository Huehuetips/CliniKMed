
<!-- Interfaz de formulario de Medicos-->
    <!-- quitar el autocomplete -->  
<body>          
    <form action="" method="post" id="Form">   
        <center>
            <u><h3 style="margin: 1rem;">REGISTRO DE LABORATORIOS</h3></u>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>NOMBRE</b><br>
                            <input type="text" class="form-control" name="Nombre_laboratorio" maxlength="50"  required>
                        </div>
                    </div><br>
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>TELEFONO</b><br>
                            <input type="number" class="form-control" name="Telefono_laboratorio" max="99999999"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>CONTACTO</b> <br>
                            <input type="text" class="form-control" name="Contacto_laboratorio" required>
                        </div>
                    </div><br><br>
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>EMAIL</b> <br>
                            <input type="email" class="form-control" name="Email_laboratorio" required>
                        </div>
                    </div><br><br>
                    <div class="col-lg-12">
                        <div style="margin: 10px;">
                            <b>DIRECCION</b><br>
                            <textarea name="Direccion_laboratorio" rows="2" class="form-control" required></textarea>
                            <!-- <input type="text" name="Direccion_medico" class="form-control" style="height: 40px;"> -->
                        </div>
                    </div>
                </div><br><br>
                <div class="row">
                    <center>
                        <button type="submit" id="submit" name="Submit_ins_lab" class="btn btn-dark btn-sm" style="width: 90px; height: 45px;">GUARDAR</button>
                    </center>
                </div>
                <br> 
            </div>
        </center>
    </form>
</body>



        <!--  envío y recepcion de datos a models/Get.model.php para conección y operaciones con bases de datos  -->
<?php
include('includes/nullrefresh.php'); // evita reenvío de formulario

if (isset($_POST['Submit_ins_lab'])) {
    $Nombre_laboratorio = isset($_POST['Nombre_laboratorio']) ? $_POST['Nombre_laboratorio'] : "";

    $Telefono_laboratorio = isset($_POST['Telefono_laboratorio']) ? $_POST['Telefono_laboratorio'] : "";
        
    $Contacto_laboratorio = isset($_POST['Contacto_laboratorio']) ? $_POST['Contacto_laboratorio'] : "";
        
    $Email_laboratorio = isset($_POST['Email_laboratorio']) ? $_POST['Email_laboratorio'] : "";
        
    $Direccion_laboratorio = isset($_POST['Direccion_laboratorio']) ? $_POST['Direccion_laboratorio'] : "";    
        
        /*==============================
                 Mostrar errores
        ==============================*/

    ini_set('display_error', 1);
    ini_set("log_errors", 1);
    ini_set("error_log", "php_error_log");

        /*============================
                    Requerimientos
        ============================*/

    require_once "models/Insert.model.php";

    $response =Ins_model::Ins_lab($Nombre_laboratorio,$Telefono_laboratorio,$Contacto_laboratorio,$Email_laboratorio,$Direccion_laboratorio);

    if ($response==true) {
        echo '<script>', 'alert("El registro ha sido ingresado con éxito");', '</script>';
    }


    return;
}
?> 