<?php
	session_start(); 
	$vI=$_REQUEST['imE'];
	$n = count ($vI);

	if($n!=0){
		mysql_connect('localhost','root', '') or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
		mysql_select_db('picmedb');

		for ($i=0; $i<$n; $i++){
			//Eliminar de la tabla imagenes
			//Eliminar de la relacion usuario-imagen
			//Eliminar etiquetas
			//Eliminar relaciones imagen-etiqueta
			//Eliminar archivos

			//Obteniendo id de la imagen
			$query = "SELECT idi FROM imagenes where imagen='$vI[$i]'";
			$result=mysql_query($query);
			$row=mysql_fetch_array($result);
			$idim=$row['idi'];
			echo "$idim - $vI[$i]";

			//eliminando de la tabla imagenes
			$query="DELETE FROM imagenes where idi='$idim'";
			if($result=mysql_query($query)){
				echo "SE ELIMINO de imagenes";
			}else{
				echo "NO SE PUDO";
			}

			//Eliminando de la relacion usuario-imagen
			$query="DELETE FROM userimagenes where idim='$idim'";
			if($result=mysql_query($query)){
				echo "SE ELIMINO de userimagenes";
			}else{
				echo "NO SE PUDO";
			}
			
			//Eliminando etiquetas

			$query="SELECT ide FROM imagenesetiqueta where idi='$idim'";
			$result=mysql_query($query);
			while($row=mysql_fetch_array($result)){
				$ide=$row['ide'];
				$query1="SELECT * FROM etiquetas where ide='$ide'";
				$result1=mysql_query($query1);
				$row=mysql_fetch_array($result1);
				$conta=$row['contador'];
				if($conta==0){
					$query2="DELETE FROM etiquetas where ide='$ide'";
					if($result2=mysql_query($query2)){
						echo "SE ELIMINO etiqueta";
					}else{
						echo "NO SE PUDO ELIMINAR ETIQUETA";
					}
				}else{
					$conta=$conta-1;
					$query2="UPDATE etiquetas SET contador='$conta' WHERE ide='$ide'";
					$result2=mysql_query($query2);
					echo "SE RESTO contador etiqueta";
				}
			}
			$query="DELETE FROM imagenesetiqueta where idi='$idim'";
			if($result=mysql_query($query)){
				echo "SE ELIMINO de userimagenes";
			}else{
				echo "NO SE PUDO";
			}


			//Eliminando Archivos
			$ruta="images/fulls/".$vI[$i];
			unlink($ruta);
			$ruta="images/thumbs/".$vI[$i];
			unlink($ruta);

		}
		header("Location: userAccess.php");

	}else{
		header("Location: userAccess.php");
	}
	
	//foreach ($_REQUEST[‘extras’] as $extra)
    //print (“$extra<BR>\n”);

	
?>