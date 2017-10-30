<?php
	$em=$_REQUEST['email'];
	$pa=$_REQUEST['password'];

	mysql_connect('localhost','root', '') or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysql_select_db('picmedb');

	$query = "SELECT * FROM users WHERE email='$em'";

	if(($result=mysql_query($query)) and ($em!='') and ($pa!='')){
		$row = mysql_fetch_array($result);
		$id = $row['idu'];
		$name = $row['name'];
		$emai = $row['email'];
		$pass = $row['password'];
		$pago=$row['pay'];
		$fpago=$row['payDat'];

		if($em==$emai and $pa==$pass){
			//redirecciona a indexUsuario
			session_start();
			$_SESSION['k_name'] = $name;
			$_SESSION['k_id'] = $id;

			$query = "UPDATE users SET pay='1' WHERE email='$em'";
			$result=mysql_query($query);

			$query = "UPDATE users SET payDat=curdate() + interval 1 month WHERE email='$em'";
			$result=mysql_query($query);

			header('Location: userAccess.php');
		}else{
			header('Location: userPayIndex.php');
			//echo "<script> alert('Error en Usuario o Contraseña. Intenta de nuevo.') </script>";
		}
	}else{
		header('Location: userPayIndex.php');
		//header('Location: errorUsuarioVacio.php');
		//echo "<script> alert('Error en Usuario o Contraseña. Intenta de nuevo.') </script>";
	}
?>