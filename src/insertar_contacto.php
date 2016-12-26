<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Documento sin titulo</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<?php 
	
		$nom=$_GET["noms"];  
		$ape=$_GET["apell"];
		$nuc=$_GET["n_casa"];
		$nut=$_GET["n_trabajo"];
		$coel=$_GET["co_el"];

		require("datos_conexion.php");

		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

		if (mysqli_connect_errno()) {

			echo "Fallo al conectar con la BBDD";

			exit();
		}

		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

		mysqli_set_charset($conexion, "utf-8");

		$consulta="INSERT INTO datos(nombres, apellidos, numeroCasa, numeroTrabajo, correoElectronico) VALUES ('$nom','$ape','$nuc','$nut','$coel')"; 

		$resultados=mysqli_query($conexion,$consulta);

		if ($resultados==false) {

			echo "Error en la consulta";

		}else{	

			echo "Registro guardado<br><br>";
			echo "<table><tr><td>$nom<td></tr>";
			echo "<table><tr><td>$ape<td></tr>";
			echo "<table><tr><td>$nuc<td></tr>";
			echo "<table><tr><td>$nut<td></tr>";
			echo "<table><tr><td>$coel</td></tr></table>";
		}

		mysqli_close($conexion);
?>
</body>
</html>

