<?php 

	$Medico = $_SESSION['mededit'];
    // echo $Medico;
    require_once "models\Select.model.php";

    $especialidades_input =Select::Sel_mast_table("SelEsp", "","");
    $sexo_input = Select::Sel_mast_table("SelSex", "","");

    $Info_medic =Select::Sel_edit("MedWhe", "$Medico","");

    if ($Info_medic[0]->Activo_medico=1) {
    	$Activo_edit_med="Si";
    }else{
    	$Activo_edit_med="No";
    }

 	$Sexo_medico = $Info_medic[0]->Sexo_medico;
 	$Especialidad_med = $Info_medic[0]->Id_especialidad;

    $Sex_edit_med =Select::Sel_edit("SexWhe", "$Sexo_medico","");
    $Esp_edit_med =Select::Sel_edit("EspWhe", "$Especialidad_med","");


 ?>


              <!-- Interfaz de formulario de Medicos-->
              <!-- quitar el autocomplete -->
 <body>    
    <form action="" method="post" id="Form">   
        <center>
            <u><h3 style="margin: 1rem;">REGISTRO DE MEDICOS</h3></u>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>NOMBRE</b><br>
                            <input type="text" class="form-control" name="Nombre_medico" maxlength="50" value="<?php echo $Info_medic[0]->Nombre_medico; ?>" disabled="true" required>
                        </div>
                    </div><br>
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>RAZON SOCIAL</b><br>
                            <input type="text" class="form-control" name="Razon_social_medico" value="<?php echo $Info_medic[0]->Razon_social_medico; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            *<b>EMAIL</b> <br>
                            <input type="email" class="form-control" name="Email_medico" value="<?php echo $Info_medic[0]->Email_medico; ?>" required>
                        </div>
                    </div><br><br>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">

                              


                            <b>ESPECIALIDAD</b> <br>
                            <select name="Id_especialidad" class="form-control" style="height: 38px;" disabled="true" required>
                                <option hidden selected value="<?php echo $Especialidad_med;?>"><?php echo $Esp_edit_med[0]->Nombre_especialidad ?></option>

                                <?php foreach ($especialidades_input as $Row_especialidades) {?>

                                <option value="<?php echo $Row_especialidades->Id_especialidad ?>"><?php echo $Row_especialidades->Nombre_especialidad; ?></option>

                                 <?php  } ?>

                            </select>
                        
                       
                        </div>
                    </div><br><br>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            *<b>SEXO</b> <br>
                            <select name="Sexo_medico" class="form-control" style="height: 38px;" required>
                                <option hidden selected value="<?php echo $Sexo_medico ?>"><?php echo $Sex_edit_med[0]->Sexo ?></option>

                                <?php foreach ($sexo_input as $Row_sexo) {?>

                                <option value="<?php echo $Row_sexo->Registro ?>"><?php echo $Row_sexo->Sexo; ?></option>

                                 <?php  }?>

                            </select>
                        </div>
                    </div><br><br>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            *<b>NUMERO DE COLEGIADO</b><br>
                            <input type="number" name="Colegiado_medico" class="form-control" value="<?php echo $Info_medic[0]->Colegiado_medico ?>" required>
                        </div>
                    </div><br><br>
                    <div class="col-lg-3">
                        <div style="margin: 10px;">
                            *<b>NUMERO DE TELEFONO</b> <br>
                            <input type="number" name="Telefono_medico" class="form-control"  required  value=<?php echo $Info_medic[0]->Telefono_medico ?>>
                        </div>
                    </div><br><br>
                    <div class="col-lg-6">
                        <div style="margin: 10px;">
                            <b>DIRECCION</b><br>
                            <textarea name="Direccion_medico" rows="1" class="form-control" required><?php echo $Info_medic[0]->Direccion_medico ?></textarea>
                        </div>
                    </div><br><br>
                </div>
                <div class="row">
                    <center>
                        <div style="margin: 10px;">
                            *<b>ACTIVO</b> <br>
                            <select name="Activo_medico" class="form-control" style="height: 38px; width: 120px;" required>
                                <option hidden selected value="<?php echo $Info_medic[0]->Activo_medico ?>"><?php echo $Activo_edit_med ?></option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </center>
                </div>
                <div class="row">
                    <center>
                        <button type="submit" id="submit" name="Submit_ins_med" class="btn btn-dark btn-sm" style="width: 90px; height: 45px;">GUARDAR</button>
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
    
    $Id_medico = $Info_medic[0]->Id_medico;
        
        /*==============================
                 Mostrar errores
        ==============================*/

    ini_set('display_error', 1);
    ini_set("log_errors", 1);
    ini_set("error_log", "php_error_log");

        /*============================
                    Requerimientos
        ============================*/

    require_once "models/Update.model.php";

    $response =Update_model::Update_med($Id_especialidad, $Razon_social_medico, $Activo_medico, $Nombre_medico, $Email_medico, $Colegiado_medico, $Direccion_medico, $Sexo_medico, $Telefono_medico, $Id_medico);

    if ($response==true) {
        echo '<script>', 'alert("El registro ha sido actualizado con éxito");', '</script>';
    }


    return;
}
?> 