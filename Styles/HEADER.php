<body>
	<header class="header">
		<form action="" method="post">
			<nav class="header_menu">
				<a title="CLINIKMED" href=""><img src="imgs/logo.jpg" id="Logo" alt="CLINIKMED"></a>
				<button type="button" class="nav-toggle" aria-label="abrir menú"><i class="fa-solid fa-bars"></i></button>
				<ul class="nav-menu">
					<li>
						 <button type="submit" name="rute" value="" ><b>INICIO</b></button>
					</li>
					<li>
						<button type="submit" name="rute" value="" ><b>PACIENTES</b></button>
					</li>
					<li>
						<b class="tituloshead">MEDICOS</b>
						<ul class="submenu">
							<li><button type="submit" name="rute" value="Forms/InsertMedicos.php" ><b>AGREGAR MEDICOS</b></button></li>
							<li><button type="submit" name="rute" value="Forms/ConsultaMedicos.php" ><b>CONSULTAR MEDICOS</b></button></li>
						</ul>
					</li>
					<li>
						<button type="submit" name="rute" value="Forms/InsertFormulas.php" ><b>FORMULAS</b></button>
					</li>
					<li>
						<b class="tituloshead">LABORATORIOS</b>
						<ul class="submenu">
							<li><button type="submit" name="rute" value="Forms/InsertLaboratorios.php" ><b>AGREGAR LABORATORIO</b></button></li>
							<!-- <li><button type="submit" name="rute" value="" ><b>CONSULTAR LABORATORIO</b></button></li> -->
						</ul>
					</li>
					<li>
						<button type="submit" name="rute" value="Forms/InsertPresentaciones.php" ><b>PRESENTACIONES</b></button>
					</li>
					<li>
						<button type="submit" name="rute" value="" ><b>CONSULTAS</b></button>
					</li>
					<li>
						<button type="submit" name="rute" value="includes/logout.php" ><b>CERRAR SESION</b></button>
					</li>
				</ul>
			</nav>
		</form>
	</header>
</body>

<script defer>
	const button = document.querySelector(".nav-toggle")
	const menu = document.querySelector(".nav-menu")

	button.addEventListener("click", () =>{
		menu.classList.toggle("header_menu_visible")
	})
</script>



<?php 

if (isset($_POST['rute'])) {
    
    $_SESSION['rute']=$_POST['rute'];

} 

?>

