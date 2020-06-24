<?php
	//conexion con la base de datos y el servidor
	$conexion=mysqli_connect('localhost','diezdiez','1001diez','diez') or die ('Error en la base de datos');

	//ingresamos la informacion a variables
	$apellido=$_POST["apellido"];
	$nombre=$_POST["nombre"];
	$user=$_POST["user"];
	$contr=$_POST["contr"];
  $edad=$_POST["edad"];
  $frase=$_POST["frase"];


	$sql = "INSERT INTO formulario2 VALUES(
								 '$nombre','$apellido', '$user', '$contr', '$edad', '$frase', null)";


	$resultado=mysqli_query($conexion,$sql) or die (mysqli_error($conexion));

		mysqli_close($conexion);
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="registrarme.html";
		</script>
	';

?>
