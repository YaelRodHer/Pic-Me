<?php
	session_start();
	$idu=$_REQUEST['idu'];
	

	mysql_connect('localhost','root', '') or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysql_select_db('picmedb');

	$query = "UPDATE users set pay='0' WHERE idu='$idu'";
	if($result=mysql_query($query)){
		header('Location: userAccessAdmin.php');
	}else{
		echo "NO SE PUDO BLOQUEAR";
	}
?>