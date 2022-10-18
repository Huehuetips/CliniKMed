

<!-- Interfaz de formulario de Medicos-->
    <!-- quitar el autocomplete --> 
<body>
    <form action="" method="post" id="Form">   
        <center>
            <u><h3 style="margin: 1rem;">PRESENTACIONES</h3></u>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div style="margin: 10px;">
                            <b>TIPO PRESENTACION</b><br>
                            <input type="text" class="form-control" name="Nombre_presentacion" maxlength="50"  required>
                        </div>
                    </div><br>
                </div>
                <div class="row">
                    <center>
                        <button type="submit" id="submit" name="Submit_ins_pres" class="btn btn-dark btn-sm" style="width: 90px; height: 45px;">GUARDAR</button>
                    </center>
                </div>
                <br> 
                <br> <br> 
                <br> 
            </div>
        </center>
    </form>
</body>



        <!--  envío y recepcion de datos a models/Get.model.php para conección y operaciones con bases de datos  -->
<?php
include('includes/nullrefresh.php'); // evita reenvío de formulario

if (isset($_POST['Submit_ins_pres'])) {
    $Nombre_presentacion = isset($_POST['Nombre_presentacion']) ? $_POST['Nombre_presentacion'] : "";

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

    $response =Ins_model::Ins_pres($Nombre_presentacion);

    if ($response==true) {
        echo '<script>', 'alert("El registro ha sido ingresado con éxito");', '</script>';
    }


    return;
}
?> 