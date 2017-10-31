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
												<form action="actionUpload.php" method="post" enctype="multipart/form-data" onsubmit="return subeImagen();">
													<h2>Selecciona la imagen que quieres subir.</h2>
													<input name="archivo" type="file"  id="imag"/>
													<br><br>
													<div class="field half">
														Etiqueta 1<input name="eti1" id="eti1" type="text" placeholder="comida" style="width: 150px">
													</div>
													<br>
													<div class="field half half">
														Etiqueta 2<input name="eti2" id="eti2" type="text" placeholder="mexicana" style="width: 150px">
													</div>
													<br>
													<input type="submit" name="enviar" value="Subir Imagen" class="button">
												</form>

												<div id="subioExito" style="display: none">
													<h4 style="color: red">Se subió la imagen con exito.</h4>
												</div>
												<div id="subioError" style="display: none">
													<h4 style="color: red">Selecione una imagen.</h4>
												</div>
												<div id="mensajeEt" style="display: none">
													<h4 style="color: red">Debe tener al menos una etiqueta.</h4>
												</div>
											</div>

											<!-- **************Eliminar imagenes*************-->
											<div id="eliminarI" style="display: none">
												<form action='actionDelete.php' method='post' enctype='multipart/form-data'>
													<?PHP
													$id=$_SESSION['k_id'];
													$na=$_SESSION['k_name'];

													$link=mysqli_connect("localhost", "root", "");
													mysqli_select_db($link, "picmedb");

													$result1=mysqli_query($link, "select idim from userimagenes where idu='$id'");
													$i=1;
													while($row1=mysqli_fetch_array($result1)){
														$idim=$row1['idim'];
														$result2=mysqli_query($link, "Select imagen from imagenes where idi='$idim'");
														$row2=mysqli_fetch_array($result2);
														$namI=$row2['imagen'];
														
														echo"
														<input type='checkbox' id='radio$i' name='imE[]' value='$namI'><label for='radio$i'><img src='images/thumbs/$namI' height='242' width='242'/></label>
														";
														$i=$i+1;
													}
													echo "<br><input value='Eliminar' name='enviar' class='button' type='submit'>";
													?>
													
													
												</form>
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