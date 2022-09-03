			<!-- llama al encabezado -->	
	<?php
		include ('Styles\HEADER.html');
	?>




<body id="Formresp">


			<!-- Interfaz de formulario de Medicos-->

	<center>
		<form action="FormMedic.php" method="post" id="Form">	
			<h2>Agregar Médicos</h2>		
			<h4>

				<input type="text" name="Nombre_medico" maxlength="50" placeholder="Médico" required><br><br>				
				<input type="number" name="Id_especialidad" min="1" max="4"  placeholder="Especialidad" required><br><br>
				<input type="text" name="Razon_social_medico" placeholder="Razón Social" required><br><br>

				<select name="Activo_medico" required>
					<option hidden selected value="">Activo</option>
					<option value=1>Si</option>
					<option value=0>No</option>
				</select><br><br>
				
				<input type="email" name="Email_medico" placeholder="Email" required><br><br>
				<input type="number" name="Colegiado_medico" minlength="4" placeholder="No. de Colegiado" required><br><br>
				<input type="mumber" name="Telefono_medico" maxlength="8" minlength="8" placeholder="Teléfono" required><br><br>
				
				<select name="Sexo_medico" required>
					<option hidden selected value="">Sexo</Sexo>
					<option value="M">Masculino</option>
					<option value="F">Femenino</option>
				</select><br><br>
				
				<input type="text" name="Direccion_medico" placeholder="Direccion" style="height: 100px;" required><br><br>

				<br>Logo<br>
				<input type="file" name="Logo_medico" id="file" accept=""><br><br>

				<br>
				<button type="submit" id="submit" name="Submit_ins_med">Enviar</button>
			</h4>
		</form>
	


			
			<!--  envío y recepcion de datos a models/Get.model.php para conección y operaciones con bases de datos  -->
	<?php
		unset ($Submit_ins_med);
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
		
			
				/*============================
						Mostrar errores
				============================*/

			ini_set('display_error', 1);
			ini_set("log_errors",1);
			ini_set("error_log", "C:/xampp/htdocs/APIREST/php_error_log");

				/*============================
						Requerimientos
				============================*/

			require_once "models/Insert.model.php";
			$response =Ins_model::Ins_data($Id_especialidad,$Razon_social_medico,$Activo_medico,$Nombre_medico,$Email_medico,$Logo_medico,$Colegiado_medico,$Direccion_medico,$Sexo_medico,$Telefono_medico);
			if ($response==true) {
				echo '<script>', 'alert("El registro ha sido ingresado con éxito");', '</script>';
			}


			return;

		}
	?>
	</center>



</body>