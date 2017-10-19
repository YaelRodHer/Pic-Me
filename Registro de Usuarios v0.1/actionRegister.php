<?php
	$us=$_REQUEST['name'];
	$pa1=$_REQUEST['password1'];
	$em=$_REQUEST['email'];

	mysql_connect('localhost','root', '') or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysql_select_db('picmedb');

	$query = "SELECT * FROM users WHERE email='$em'";
	if($result=mysql_query($query)){
		if($row = mysql_fetch_array($result)){
			header('Location: indexU.php');
		}else{
			$query = "INSERT INTO users(name, password, email, pay, payDat) VALUES ('$us','$pa1', '$em', '1', CURDATE() + INTERVAL 1 MONTH)";
			if($result=mysql_query($query)){
				echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
			}else{
				echo "NO SE PUDO registrar";
			}
		}
	}else{
		header('Location: index1.php');
	}
?>