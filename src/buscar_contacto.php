<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Documento sin titulo</title>
	<link rel="stylesheet" href="">
	<style>
		table{
			width: 50%;
			border: 1px dotted #FC0606;
			margin: auto;
		}
	</style>
</head>
<body>
	
<?php 
	
		$noms=$_GET["nombs"];
		$apel=$_GET["apelli"];  

		require("datos_conexion.php");

		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

		if (mysqli_connect_errno()) {

			echo "Fallo al conectar con la BBDD";

			exit();
		}

		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

		mysqli_set_charset($conexion, "utf-8");

		$consulta="SELECT * FROM `datos` WHERE nombres LIKE'%$noms%' AND apellidos LIKE'%$apel%'"; 

		$resultados=mysqli_query($conexion,$consulta);

		if ($resultados==false) {
			echo "Error en la consulta";
		}else{	

			if (mysqli_affected_rows($conexion)==0) {
				echo "No hay registros con ese criterio";
			}else{

				while ($fila=mysqli_fetch_array($resultados,MYSQL_ASSOC)) {
					echo "<table><tr><td>";
					echo $fila['nombres'] . "</td><td>";
					echo $fila['apellidos'] . "</td><td>";
					echo $fila['numeroCasa'] . "</td><td>";
					echo $fila['numeroTrabajo'] . "</td><td>";
					echo $fila['correoElectronico'] . "</td><td></tr></table>";

					echo "<br>";
					echo "<br>";
				}
			}
		}

		

		mysqli_close($conexion);
?>
</body>
</html>

