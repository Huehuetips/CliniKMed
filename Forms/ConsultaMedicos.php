<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONSULTA MEDICOS</title>

	<script src="https://kit.fontawesome.com/6a50c4176b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../Styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../Styles/CSSCLINIK.css">
</head>


<?php
	@session_start();
    @$varsesion = $_SESSION['usuario'];
    if ($varsesion==NULL or $varsesion == "") {
        include('../index.php');
        die(); 
    }
    include('Styles\HEADER.php');

	require_once "models\Select.model.php";
    $medicos_select =Sel_model::Sel_data("SelMed","","");

?>


<body>

              <!-- Interfaz de formulario de Medicos-->
              <!-- quitar el autocomplete -->
    
    <form action="ConsultaMedicos.php" method="post" id="Form">   
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
	            			<td><button type="submit" name="modify_medic" class="btn btn-dark btn-sm" value="<?php echo $Row_medicos->Colegiado_medico ?>">EDITAR</button></td>
	            		</tr>

	            		<?php } ?>
	            	</tbody>
            	</table><br><br>
            </div>
        </center>
    </form>

    <script>
        if (window.history.replaceState) {
            console.log("")
            window.history.replaceState(null,null,window.location.href)
        }
    </script>.´

</body>

<?php 

if (isset($_POST['modify_medic'])) {

	$modify_medic = isset($_POST['modify_medic']) ? $_POST['modify_medic'] : "";
	echo $modify_medic;


}

?>

</html>