<!DOCTYPE HTML>
<!--
	-Casos de uso
	-Manual tecnico
	//-Manual de usuario
	-Codigo comentado
	
	
	http://fontawesome.io/examples/
-->
<?PHP
	session_start(); 
	if(!isset($_SESSION['k_id']) and !isset($_SESSION['k_name'])){
		header("Location: generic.php");
	}
?>
<html>
	<head>
		<title>Pic Me</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/png" href="picme.png" />
		<script type="text/javascript" src="miJS.js"></script>
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php"><span class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.php" class="active"><span class="icon fa-file-text-o"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Banner -->
						

					<!-- Contact -->
						<section id="contact">
							<!-- Social -->
								<div class="social column">
									<header>
										<br><br>
										<h1><center>Hola <?PHP echo $_SESSION['k_name']; ?></center></h1>
										<ul class="tabs">
											
										</ul>
									</header>
									<center>
									<h4>Estas a solo un paso de reactivar tu cuenta.</h4>
									<h5>Para seguir haciendo uso de la plataforma <br>es necesario que inicies sesión.</h5>
									<br><br><br>

									<form action="actionActivate.php" method="post">
										<div class="field half first">
											<label for="email">Email</label>
											<input name="email" id="email" type="email" placeholder="ejemplo@ejemplo.com">
										</div>
										<div class="field half">
											<label for="password">Contraseña</label>
											<input name="password" id="password" type="Password" placeholder="Contraseña">
										</div>
										<div class="field half">
											<label for="mensaje" style="color: red">*Email o contraseña incorrectos, vuelve a intentarlo.</label>
										</div>
										<ul class="actions">
											<li><input value="Entrar" class="button" type="submit"></li>
										</ul>
									</form>

									</center>
									<br><br>
									
								</div>

							<!-- Form -->
								<div class="column">
									
									<h3><center>Infromación de interés.</ceter></h3>
									
									<h4>Con tu membresía:</h4>
									<ul>
										<li>Tu cuenta se habilitará.</li>
										<li>Tus fotografías serán publicadas de nuevo.</li>
										<li>Se segurá promocionando tu trabajo.</li>
										<li>Podrás seguir subiendo fotografías.</li>
									</ul>
									
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