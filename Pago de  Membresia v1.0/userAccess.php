<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?PHP
	session_start(); 
	if(!isset($_SESSION['k_id']) and !isset($_SESSION['k_name'])){
		header("Location: generic.php");
	}
?>
<html>
	<head>
		<title>Bienvenido</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/png" href="picme.png" />
		<script type="text/javascript" src="JSusersA.js"></script>
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php" onclick=""><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php"><span class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.php"class="active"><span class="icon fa-file-text-o"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Header -->
						

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">

									<!-- Filters -->
										<header>
											<h1>Bienvenido <?PHP echo $_SESSION['k_name']; ?></h1>
											<ul class="tabs">
												<li><button onclick="faccion(1);" style="background: green">Subir Imagenes</button></li>
												<li><button onclick="faccion(2);" style="background: green">Eliminar imagenes</button></li>
												<li><button onclick="faccion(3);" style="background: green">Etiquetas</button></li>
												<li><button onclick="faccion(4);" style="background: orange">Editar perfil</button></li>
											</ul>
											
											
										</header>

										<!-- **************subir imagenes*************-->
											<div id="subirI" style="display: none">
												Espacio de trabajo para subir imagenes
											</div>

											<!-- **************Eliminar imagenes*************-->
											<div id="eliminarI" style="display: none">
												Espacio de trabajo para eliminar imagenes
											</div>

											<!-- **************Etiquetas*************-->
											<div id="etiquetasI" style="display: none">
												Espacio de trabajo para las etiqutas
											</div>
											
											<!-- **************Editar Perfil*************-->
											<div id="editarI" style="display: none">
												Espacio de trabajo para editar perfil
											</div>

										<div id="contenido" style="display: block">
										<div class="content">
											<!-- **************Principal*************-->
												Contenido principal
										</div>
										</div>
										
								</div>
						</section>
				</section>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>