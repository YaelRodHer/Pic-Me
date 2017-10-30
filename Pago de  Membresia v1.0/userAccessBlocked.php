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
										<h1><center>Bienvenido <?PHP echo $_SESSION['k_name']; ?></center></h1>
										<ul class="tabs">
											
										</ul>
									</header>
									<center>
									<h4>Tu membresía no ha sido pagada.</h4>
									<h5>Para seguir haciendo uso de la plataforma <br>es necesario el pago de una membresía.</h5>

									<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
										<input type="hidden" name="cmd" value="_s-xclick">
										<input type="hidden" name="hosted_button_id" value="QANUQWAYTLHD8">
										
										<input type="hidden" name="on0" value="Tipo de Membresía">Tipo de Membresía
										<select name="os0" style="width: 220px">
											<option value="Mensual">Mensual $300,00 MXN</option>
										</select>
										
										<input type="hidden" name="currency_code" value="MXN">
										<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
										<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
									</form>


									 
									</center>
									<br><br>
									<h3>Nota:</h3>
									<ul>
										<li>Tu cuenta no ha sido eliminada.</li>
										<li>Tu cuenta ha sido deshabilitada.</li>
										<li>Tus fotografías no serán publicadas.</li>
										<li>Tu cuenta se eliminará después de 15 días de no haber pagado.</li>
									</ul>

									
									<h3>Contáctanos.</h3>
									<ul class="icons">
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
									
								

									
									
								</div>

							<!-- Form -->
								<div class="column">
									
									<h3><center>Instrucciones de pago.</ceter></h3>
									
									<section id="galleries">
									<!-- Photo Galleries -->
										<div class="gallery">
											<div class="content">
												<b>Da clic en el botón "comprar ahora" y sigue las instrucciones.<br><br>

												Paso 1. Inicia sesión o crea una cuenta para pagar.</b><br><br>
												<div class="media all people">
													<a href="pago1.jpg">Ver imagen</a>
												</div>
												<br><br>

												<b>Si ya tienes una cuenta PayPal ve al paso 4. En caso de no tener cuenta en PayPal sigue las instrucciones.<br><br>

												Paso 2. Da click en "Crear cuenta" e ingresa los datos de tu tarjeta de crédito o débito.</b>
												<div class="media all people">
													<a href="pago2.jpg">Ver imagen</a>
												</div>
												<br><br>

												<b>

												Paso 3. Ingresa tus datos de sesión para poder hacer uso de tu cuenta PayPal. Leé y confirma las condiciones de uso y politica de privacidad. Acepta y paga.</b>
												<div class="media all people">
													<a href="pago3.jpg">Ver imagen</a>
												</div>
												<br><br>

												<b>

												Paso 4. Da click en "Crear cuenta" e ingresa los datos de tu tarjeta de crédito, agrega tu tarjeta y paga.</b>
												<div class="media all people">
													<a href="pago4.jpg">Ver imagen</a>
												</div>
												<br><br>

												<h3 style="color: red"><br><br>Importante.</h3>
												<b>

												Paso 5. Una vez que hayas pagado deberás iniciar sesión en la página a la que se te direccionó.</b>
												<div class="media all people">
													<a href="pago5.jpg">Ver imagen</a>
												</div>
												<br><br>
												
											</div>
										</div>
									</section>

									
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