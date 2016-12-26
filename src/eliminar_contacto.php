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
	
	$noms=$_GET["nomb"];
	$apel=$_GET["apel"]; 

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if (mysqli_connect_errno()) {
		
		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

	mysqli_set_charset($conexion, "utf-8");

	$consulta="DELETE FROM datos WHERE nombres='$noms' AND apellidos='$apel'"; 

	$resultados=mysqli_query($conexion,$consulta);

	if ($resultados==false) {
		echo "Error en la consulta";
	}else{	
		
		if (mysqli_affected_rows($conexion)==0) {
			echo "No hay registros que eliminar con ese criterio";
		}else{

			echo "Se han eliminado " . mysqli_affected_rows($conexion) . "registros";
		}
		
	}
	mysqli_close($conexion);

	
?>
</body>
</html>