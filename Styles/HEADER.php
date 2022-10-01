<!DOCTYPE html>
<?php
    @session_start(); 

?>
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

		<form action="../index.php" method="post">
			<nav class="header_menu">
				<a href="../index.php" id="Logo">CLINIKMED</a>
				<button class="nav-toggle" aria-label="abrir menú"><i class="fa-solid fa-bars"></i></button>
				<ul class="nav-menu">
					<li>
						 <button type="submit" name="botheader" value="ini" ><b>INICIO</b></button>
					</li>
					<li>
						<button type="submit" name="botheader" value="pac" ><b>PACIENES</b></button>
					</li>
					<li>
						<b class="tituloshead">MEDICOS</b>
						<ul class="submenu">
							<li><button type="submit" name="botheader" value="Ag_med" ><b>AGREGAR</b></button></li>
							<li><button type="submit" name="botheader" value="Con_med" ><b>Consultar</b></button></li>
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
				
					<li class="cerrar-sesion">
						<a href="../includes/logout.php">
							<b>CERRAR SESION</b>
						</a>
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

    <script>
        if (window.history.replaceState) {
            console.log("")
            window.history.replaceState(null,null,window.location.href)
        }
    </script>



<?php 


if (isset($_POST['botheader'])) {
    
    $botheader = isset($_POST['botheader']) ? $_POST['botheader'] : "";
	
}




 ?>