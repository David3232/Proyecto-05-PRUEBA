<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $conector = new mysqli("localhost", "root", "", "juegos");
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      } else {
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $edad=$_POST['edad'];
        $curso=$_POST['curso'];
        $puntuacion=$_POST['puntuacion'];
        $correo=$_POST['correo'];
        $consulta="INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion,correo) values ('$nombre','$apellidos',$edad,$curso,$puntuacion,'$correo')";
      $insertacion = $conector->query($consulta);
     $resultado = $conector->query("SELECT * FROM usuarios");
     foreach ($resultado as $fila) {
        echo "Usuario ".$fila['id']."<br>"."Nombre: ".$fila['nombre']."<br>"."Apellidos: ".$fila['apellidos']."<br>"."Edad: ".$fila['edad']."<br>"."Curso: ".$fila['curso']."<br>"."Puntuacion: ".$fila['puntuacion']."<br>";
        echo "Correo: ".$fila['correo']."<br> <br>";
      }
    }
     ?>
  </body>
</html>
