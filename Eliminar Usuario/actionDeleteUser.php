<?php
	session_start();
	$idu=$_REQUEST['idu'];
	

	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "picmedb");

	//////********Elimina las etiquetas en la que esta involucrado de la tabla etiquetas
	$result1=mysqli_query($link, "SELECT distinct etiquetas.ide from users, userimagenes, imagenes, etiquetas, imagenesetiqueta where users.idu='$idu' and userimagenes.idu=users.idu and userimagenes.idim=imagenes.idi and imagenesetiqueta.idi=imagenes.idi and imagenesetiqueta.ide=etiquetas.ide");
													
	while($row1=mysqli_fetch_array($result1)){
		//Obtengo id la primer etiqueta
		$ideti=$row1['ide'];
		
		//obtengo el contador
		$result2=mysqli_query($link, "SELECT contador from etiquetas where etiqueta='$ideti'");
		$row2=mysqli_fetch_array($result2);
		$cont=$row2['contador'];

		//Si es mayor a 0 restar uno
		if($cont>0){
			$cont=$cont-1;
			$result2=mysqli_query($link, "UPDATE etiquetas set contador='$cont' WHERE ide='$ideti'");
			$row2=mysqli_fetch_array($result2);
		}else{
			//Si no elimina etiqueta de la tabla etiquetas
			$result2=mysqli_query($link, "DELETE FROM etiquetas where ide='$ideti'");
			$row2=mysqli_fetch_array($result2);

			////////////////*****Se elimina etiqueta de la tabla imagenesetiqueta
			$result2=mysqli_query($link, "DELETE FROM imagenesetiqueta where ide='$ideti'");
			$row2=mysqli_fetch_array($result2);
		}
	}

	///////////////*******Elimina sus imagenes del servidor y de la tabla imagenes
	$result1=mysqli_query($link, "SELECT idim from userimagenes where idu='$idu'");
	while($row1=mysqli_fetch_array($result1)){
		//Obtengo el id de la primer imagen
		$idim=$row1['idim'];

		//Eliminar ficheros
		$result2=mysqli_query($link, "SELECT imagen from imagenes where idi='$idim'");
		$row2=mysqli_fetch_array($result2);
		//nombre de la imagen
		$name=$row2['imagen'];

		$ruta="images/fulls/".$name;
		unlink($ruta);
		$ruta="images/thumbs/".$name;
		unlink($ruta);

		//Elimino el registro de la tabla imagenes
		$result2=mysqli_query($link, "DELETE FROM imagenes where idi='$idim'");
		$row2=mysqli_fetch_array($result2);

		//////////////***Elimino el registro de la tabla userimagenes
		$result2=mysqli_query($link, "DELETE FROM userimagenes where idim='$idim'");
		$row2=mysqli_fetch_array($result2);

	}
	
	///////////////******Elimina el usuario de la tabla usuarios
	$result2=mysqli_query($link, "DELETE FROM users where idu='$idu'");
	$row2=mysqli_fetch_array($result2);

	header('Location: userAccessAdmin.php');
?>