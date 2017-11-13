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
											<h1>Bienvenido Administrador</h1>
											<br>
											<a href="generic.php" class="button" style="background: red">Cerrar sesión</a>
										</header>
										
											<!-- **************Principal*************-->
												<?PHP
													$id=$_SESSION['k_id'];
													$na=$_SESSION['k_name'];

													
													$link=mysqli_connect("localhost", "root", "");
													mysqli_select_db($link, "picmedb");

													$result1=mysqli_query($link, "SELECT idu, name, email, pay, payDat from users");
													echo "<table style='text-align: center'>
															<tr> <td><b>ID</b></td> <td><b>NOMBRE</b></td> <td><b>EMAIL</b></td> <td><b>USUARIO ACTIVO</b></td> <td><b>VENCIMIENTO DE MEMBRESÍA<br>(AAAA/MM/DD)</b></td> <td><b></b></td> <td><b></b></td> <td><b></b></td> <td><b></b></td></tr>";

													while($row1=mysqli_fetch_array($result1)){
														$idu=$row1['idu'];
														$name=$row1['name'];
														$email=$row1['email'];
														$pay=$row1['pay'];
														$payDat=$row1['payDat'];
														if($idu!='1'){
															$act='No';
															if($pay==1)
																$act='Si';
															echo "<tr> <td>$idu</td> <td>$name</td> <td>$email</td> <td>$act</td> <td>$payDat</td>
																	<td><a href='perfil.php?idu=$idu' class='button' target='_blank'>Ver Perfil</a></td>
																	<td><a href='actionBlockUser.php?idu=$idu' class='button'>Bloquear</a></td>
																	<td><a href='actionUnblockUser.php?idu=$idu' class='button'>Desbloquear</a></td>
																	<td><a href='actionDeleteUser.php?idu=$idu' class='button'>Eliminar</a></td>
																  </tr>";
														}
													}
													echo "</table>";
												?>
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