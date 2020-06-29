<?php
	//ingresamos la informacion a variables
	$apellido=$_POST["apellido"];
	$nombre=$_POST["nombre"];
	$user=$_POST["user"];
	$contr=$_POST["contr"];
	$frase=$_POST["frase"];
	$to=$_POST["edad"];
	$subject="Verificacion de cuenta";
	$mensaje = '
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="estilos.css" type="text/css">
<script type="text/javascript" src="jquery-3.5.1.js"></script>
</head>

<body class="w3-dark-gray">
  <div class="w3-panel">
    <div class="w3-container w3-Sand w3-padding">
         <div class="w3-row">
       <div class="w3-container w3-half w3-padding">
         <div class="w3-group">
          <button class="w3-button w3-blue w3-padding" type="submit" name="Registrarse" id="registrarse">
            <a href="index.html">Confirmar cuenta</a>
          </button>
           </br>
           </br>
         </form>
         </div>
         </div>
</div>
      <script type="text/javascript" src="funciones.js"></script>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
if(mail($to, $subject, $mensaje, $cabeceras)==True)
{
//conexion con la base de datos y el servidor
	$conexion=mysqli_connect('localhost','diezdiez','1001diez','diez') or die ('Error en la base de datos');

	$sql = "INSERT INTO formulario2 VALUES(
								 '$nombre','$apellido', '$user', '$contr', '$to', '$frase', null)";


	$resultado=mysqli_query($conexion,$sql) or die (mysqli_error($conexion));

		mysqli_close($conexion);
	echo'
}
		<script>
			alert("Registro Exitoso");
			location.href="registrarme.html";
		</script>
	';

?>
