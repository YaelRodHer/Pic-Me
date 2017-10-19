<!DOCTYPE HTML>
<!--
	-Casos de uso
	-Manual tecnico
	//-Manual de usuario
	-Codigo comentado
	
	
	http://fontawesome.io/examples/
-->
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
						<li><a href="index.php" class="active"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php"><span class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.php"><span class="icon fa-file-text-o"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Banner -->
						<section id="banner">
							<div class="inner">
								<h1>Pic Me</h1>
								<p>Contacta al fotógrafo, diseñador gráfico o arquitecto que necesites para marketing, <br>edificaciónes, eventos o cualquier tipo sesiones fotográficas.<br><br>También puedes ser parte de nuestra comunidad para que la gente pueda contratarte.</p>
								Galería
								<ul class="actions">
									<li><a href="gallery.php" class="button alt scrolly big">Continuar</a></li>
								</ul>
							</div>
						</section>

					<!-- Contact -->
						<section id="contact">
							<!-- Social -->
								<div class="social column">
									<h3>Acerca de Pic Me.</h3>
									<p>Pic Me es una plataforma, donde diferentes fotógrafos, diseñadores gráficos y arquitectos, de diferentes categorías y estilos, pueden mostrarle al mundo su manera de crear arte.</p>

									<h3>Síguenos.</h3>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
									
								</div>

							<!-- Form -->
								<div class="column">
									<h3>¿Te gustaría ser contratado como fotógrafo, diseñador gráfico o arquitecto?</h3>
									<p><b>Regístrate para que podamos publicar tu trabajo.</b></p>
									<form action="actionRegister.php" method="post" name="form" onsubmit="return values();" target="_blank">
										<div class="field half first">
											<label for="name">Nombre</label>
											<input name="name" id="name" type="text" placeholder="Nombre">
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input name="email" id="email" type="email" placeholder="ejemplo@ejemplo.com">
										</div>
										
										<div class="field half first">
											<label for="password">Contraseña</label>
											<input name="password1" id="password1" type="password" placeholder="Contraseña">
										</div>
										<div class="field half half">
											<label for="password">Confirma contraseña</label>
											<input name="password2" id="password2" type="password" placeholder="Contraseña">
										</div>


										
										<div class="field first">
											<input type="checkbox" value="1" name="agree" id="agree"><label for="agree">Confirmo que he leído y acepto los
											<u><a href="#">términos y condiciones</a></u>.</label>
										</div>


										<div class="field half first" id="mensajeE1" style='display: none'>
											<label for="mensaje" style="color: red">*Nombre no valido.</label>
										</div>
										<div class="field half" id="mensajeE2" style='display: none'>
											<label for="mensaje" style="color: red">*Correo no valido.</label>
										</div>
										<div class="field half first" id="mensajeE3" style='display: none'>
											<label for="mensaje" style="color: red">*Error en contraseña.</label>
										</div>
										<div class="field first" id="mensajeE4" style='display: none'>
											<label for="mensaje" style="color: red">*Debe aceptar los términos y condiciones para registrarse.</label>
										</div>
										<div class="field first" id="mensajeE5" style='display: none'>
											<label for="mensaje" style="color: red">*Este coreo ya esta registrado.</label>
										</div>
										<div class="field first" id="mensajeExito" style='display: none'>
											<label for="mensaje" style="color: red">Usuario Registrado.</label>
											<a href="generic.php" class="button">Iniciar Sesión</a>
										</div>
										<ul class="actions">
											<li><input value="Registrar" name="enviar" class="button" type="submit"></li>
										</ul>
										
									</form>
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