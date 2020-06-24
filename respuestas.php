<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="assets/estilos.css" type="text/css">
    </head>
    <body class="w3-dark-gray">
      <div class="w3-panel">
        <div class="w3-container w3-leftbar w3-border-blue w3-light-blue">
            <a href="https://ips.edu.ar/" target="_blank" class="w3-bar-item w3-button"><img src="assets/poli.png" height="100px"/></a>
            <a href="tabla.html" class="w3-bar-item w3-button w3-right"><img src="assets/tabla.svg" height="60px"/>
            <p>Tabla</p>
            </a>
            <a href="respuestas.php" class="w3-bar-item w3-button w3-right"><img src="assets/resultados.svg" height="60px"/>
            <p>Respuestas</p>
            </a>
            <a href="index.html" class="w3-bar-item w3-button w3-right"><img src="assets/encuesta.svg" height="60px"/>
            <p>Formulario</p>
            </a>
        </div>
      </div>
      <div class="w3-panel">
        <div class="w3-container w3-Sand w3-padding">
          <?php
                $enlace=mysqli_connect('localhost','diezdiez','1001diez','diez') or die ('Error en la base de datos');
                $consulta = "SELECT * FROM formulario1";
                $ejecutarConsulta = mysqli_query($enlace, $consulta);
                $verFilas = mysqli_num_rows($ejecutarConsulta);
                $fila = mysqli_fetch_array($ejecutarConsulta);

                if(!$ejecutarConsulta){
                  echo"Error en la consulta";
                }else{
                  if($verFilas<1){
                    echo"<tr><td>Sin registros</td></tr>";
                  }else{
                    for($i=0; $i<=$fila; $i++){
                      echo'
                      <div class="w3-panel w3-bottombar w3-border-blue">
                        <div class="w3-row">
                          <div class="w3-col m2 l1 w3-center w3-border">ID
                            <p>'.$fila[22].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Apellido
                            <p>'.$fila[0].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Nombre
                            <p>'.$fila[1].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Sexo
                            <p>'.$fila[2].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Enfermedad
                            <p>'.$fila[3].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Color
                            <p>'.$fila[4].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Linea
                            <p>'.$fila[5].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Email
                            <p>'.$fila[6].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Telefono
                            <p>'.$fila[7].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Serie
                            <p>'.$fila[8].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Posicion
                            <p>'.$fila[9].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Hijos
                            <p>'.$fila[10].'</p>
                          </div>
                        </div>
                        <div class="w3-row">
                          <div class="w3-col m2 l1 w3-center w3-border">Descripcion
                            <p>'.$fila[11].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Amor
                            <p>'.$fila[12].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Enano
                            <p>'.$fila[13].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Formulario
                            <p>'.$fila[14].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Banda
                            <p>'.$fila[15].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Peli
                            <p>'.$fila[16].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Alcohol
                            <p>'.$fila[17].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Comida
                            <p>'.$fila[18].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Opinion
                            <p>'.$fila[19].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Libro
                            <p>'.$fila[20].'</p>
                          </div>
                          <div class="w3-col m2 l1 w3-center w3-border">Clave
                            <p>'.$fila[21].'</p>
                          </div>
                        </div>
                      </div>
                      <div>
                        <p></p>
                        <h1> </h1>
                        <p></p>
                      </div>
                      ';
                      $fila = mysqli_fetch_array($ejecutarConsulta);

                    }

                  }
                }


          ?>

        </div>
      </div>
    </body>
</html>
