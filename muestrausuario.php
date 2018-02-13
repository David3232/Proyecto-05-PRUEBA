<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>muestrausuarios</title>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("localhost","root", "", "juegos");
    if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
  }else {
  // Traemos el id del url
    $id=$_GET['id'];
    $consulta="SELECT * FROM usuarios where id=$id";
    $resultado = $mysqli->query($consulta);
    // Mostramos por pantalla
    foreach ($resultado as $fila) {
      echo "Usuario ".$fila['id']."<br>"."Nombre: ".$fila['nombre']."<br>"."Apellidos: ".$fila['apellidos']."<br>"."Edad: ".$fila['edad']."<br>"."Curso: ".$fila['curso']."<br>"."Puntuacion: ".$fila['puntuacion']."<br>";
      echo "Correo: ".$fila['correo']."<br> <br>";
    }
  }
     ?>
  </body>
</html>
