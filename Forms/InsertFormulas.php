<?php 
    require_once "models\Select.model.php";
    require 'includes/DataGrid.php';
    $Componentes_select =Select::Sel_mast_table("SelCom","","");

?>
              <!-- Interfaz de formulario de Medicos-->
              <!-- quitar el autocomplete -->
    
<form action="" method="post" id="Form">   
    <center>
        <u><h3 style="margin: 1rem;">FORMULAS</h3></u>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td><b>COMPONENTE</b></td>
                        <td><b>CONCENTRACION</b></td>
                        <td><b>AGREGAR A FORMULA</b></td>
                        
                        
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($Componentes_select as $Row_Componentes) {?>

                    <tr>
                        <td><?php echo $Row_Componentes->Nombre_componente ?></td>
                        <td><?php echo $Row_Componentes->Concentracion_componente?>% </td>
                        <td><button type="submit" name="modify_medic" class="btn btn-dark btn-sm" value="<?php echo $Row_Componentes->id_medico ?>">AGREGAR</button></td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table><br><br>
        </div>
    </center>
</form>



<?php 
include ('includes/nullrefresh.php');
// if (isset($_POST['modify_medic'])) {

//     $modify_medic = isset($_POST['modify_medic']) ? $_POST['modify_medic'] : "";
//     $_SESSION['mededit']=$modify_medic;
//     $_SESSION['rute']='Forms/EditaMedicos.php';
//     ?> 
<!-- //     <script>location. reload()</script> -->
     <?php 


// }

?> 