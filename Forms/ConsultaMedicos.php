<?php 
	require_once "models\Select.model.php";
    $medicos_select =Select::Sel_med("Sel");

?>
              <!-- Interfaz de formulario de Medicos-->
              <!-- quitar el autocomplete -->
    
<form action="" method="post" id="Form">   
    <center>
        <u><h3 style="margin: 1rem;">CONSULTA DE MEDICOS</h3></u>
        <div class="container">
        	<table class="table table-bordered">
        		<thead>
            		<tr>
            			<td><b>COLEGIADO</b></td>
            			<td><b>NOMBRE</b></td>
            			<td><b>ACTIVO</b></td>
            		</tr>
        		</thead>
        		<tbody>

            		<?php foreach ($medicos_select as $Row_medicos) {?>

            		<tr>
            			<td><?php echo $Row_medicos->Colegiado_medico ?></td>
            			<td><?php echo $Row_medicos->Nombre_medico ?></td>
            			<td><?php echo $Row_medicos->Activo_medico = 1 ? "SI": "NO";   ?> </td>
            			<td><button type="submit" name="modify_medic" class="btn btn-dark btn-sm" value="<?php echo $Row_medicos->id_medico ?>">EDITAR</button></td>
            		</tr>

            		<?php } ?>
            	</tbody>
        	</table><br><br>
        </div>
    </center>
</form>


<?php 
include ('includes/nullrefresh.php');
if (isset($_POST['modify_medic'])) {

	$modify_medic = isset($_POST['modify_medic']) ? $_POST['modify_medic'] : "";
    $_SESSION['mededit']=$modify_medic;
    $_SESSION['rute']='Forms/EditaMedicos.php';
    ?> <script>location. reload()</script><?php 


}

?>