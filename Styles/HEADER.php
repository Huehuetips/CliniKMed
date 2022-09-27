<!DOCTYPE html>

<head>

        <script src="https://kit.fontawesome.com/6a50c4176b.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="../Styles/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../Styles/CSSCLINIK.css">
</head>

<body>
	<header class="header">

	<!-- 	<div class="container-fluid text-center" style="background-color: rgb(100, 150, 200); margin-bottom: 0px;">
			<h4 style="text-align: left;">	
				CLINIKMED
			</h4>
			<section class="container">
				<article>
					<h1 id="TITULO" class="display-1">Clínica Médica Salud y Bienestar</h1><br>
				</article>
			</section>
		</div> -->


		<nav class="header_menu">
			<a href="#" id="Logo">CLINIKMED</a>
			<button class="nav-toggle" aria-label="abrir menú"><i class="fa-solid fa-bars"></i></button>
			<ul class="nav-menu">
				<li>
					<a href="../index.php">
						<b>INICIO</b>
					</a>
				</li>
				<li>
					<b class="titulo">PACIENTES</b>
				</li>
				<li>
					<b class="titulo">MEDICOS</b>
					<ul class="submenu">
						<li><a href="../Forms/Formulario.php">AGREGAR</a></li>
						<li><a href="../Forms/ConsultaMedicos.php">CONSULTAR</a></li>
					</ul>
				</li>
				<li>
					<a href="">
						<b>PATOLOGIAS</b>
					</a>
				</li>
				<li>
					<a href="">
						<b>RECETAS</b>
					</a>
				</li>
				<li>
					<a href="">
						<b>PRESENTACIONES</b>
					</a>
				</li>
				<li>
					<a href="">
						<b>CONSULTAS</b>
					</a>
				</li>
			
				<li>
					<form action="header.php" method="post">   
						<button type="submit" id="cerrarsesion" name="cerrarsesion" style="">cerrar sesion</button>
					</form>
				</li>
			</ul>
		</nav>
	</header>
</body>

<?php 

if (isset($_POST['cerrarsesion'])) {
	echo "sesion cerrada";

	session_destroy();


}

?>

<script defer>
	const button = document.querySelector(".nav-toggle")
	const menu = document.querySelector(".nav-menu")

	button.addEventListener("click", () =>{
		menu.classList.toggle("header_menu_visible")
	})
</script>