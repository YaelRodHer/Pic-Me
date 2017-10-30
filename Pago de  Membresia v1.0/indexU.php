<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Pic Me</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
								<p>Contacta al fotógrafo que necesitas para tus eventos o culaquier tipo sesiones fotográficas.<br>También puedes ser parte de nuestra comunidad para que puedan contratarte como fotógrafo.</p>
								Galería de momentos
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
									<p>Pic Me es una plataforma, donde diferentes fotógrafos, de diferentes categorías y estilos, pueden mostrarle al mundo su manera de inmortalizar momentos.</p>

									<h3>Síguenos.</h3>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
									
								</div>

							<!-- Form -->
								<div class="column">
									<h3>¿Te gustaría ser contratado como fotógrafo?</h3>
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
											<input type="checkbox" value="1" name="agree" id="agree"><label for="agree">Acepto los terminos y condiciones.</label>
											<u><a href="terminos.php">IMPORTANTE LEER.</a></u>
										</div>


										<div class="field half first" id="mensajeE1" style='display: none'>
											<label for="mensaje" style="color: red">*Nombre no valido.</label>
										</div>
										<div class="field half" id="mensajeE2" style='display: none'>
											<label for="mensaje" style="color: red">*Correo no valido.</label>
										</div>
										<div class="field half first" id="mensajeE3" style='display: none'>
											<label for="mensaje" style="color: red">*Error en contraseñas.</label>
										</div>
										<div class="field first" id="mensajeE4" style='display: none'>
											<label for="mensaje" style="color: red">*Debe aceptar los terminos y condiciones para registrarse.</label>
										</div>
										<div class="field first" id="mensajeExito" style='display: none'>
											<label for="mensaje" style="color: red">Usuario Registrado.</label>
										</div>
										<div class="field half first" id="mensajeEC1">
											<label for="mensaje" style="color: red">*Este correo ya está registrado.</label>
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