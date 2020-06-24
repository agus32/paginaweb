<?php
	//conexion con la base de datos y el servidor
	$conexion=mysqli_connect('localhost','diezdiez','1001diez','diez') or die ('Error en la base de datos');

	//ingresamos la informacion a variables
	$apellido=$_POST["apellido"];
	$nombre=$_POST["nombre"];
	$sexo=$_POST["sexo"];
	$otrosexo=$_POST["otrosexo"];
	$enfermedad=$_POST["enfermedad"];
	$otraenfermedad=$_POST["otraenfermedad"];
	$color=$_POST["color"];
	$linea=$_POST["linea"];
	$email=$_POST["email"];
	$telefono=$_POST["telefono"];
	$serie=$_POST["serie"];
	$posicion=$_POST["posicion"];
	$hijos=$_POST["hijos"];
	$descripcion=$_POST["descripcion"];
	$amor=$_POST["amor"];
	$enano=$_POST["enano"];
	$formul=$_POST["formul"];
	$banda=$_POST["banda"];
	$peli=$_POST["peli"];
	$alcohol=$_POST["alcohol"];
	$comida=$_POST["comida"];
	$opinion=$_POST["opinion"];
	$libro=$_POST["libro"];
	$clave=$_POST["clave"];

	if($sexo == "otro")
	{
		$sexo=$otrosexo;
	}

	if(isset($enfermedad))
	{
		$enfermedad=$otraenfermedad;
	}
	else {
		$enfermedad="no";
	}


	$sql = "INSERT INTO formulario1 VALUES(
								'$apellido', '$nombre', '$sexo', '$enfermedad', '$color', '$linea', '$email', '$telefono', '$serie', '$posicion', '$hijos', '$descripcion', '$amor', '$enano', '$formul',
								'$banda', '$peli', '$alcohol', '$comida', '$opinion', '$libro', '$clave', null)";


	$resultado=mysqli_query($conexion,$sql) or die (mysqli_error($conexion));

		mysqli_close($conexion);
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	';

?>
