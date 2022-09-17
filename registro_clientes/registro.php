<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>
    
<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $password = md5($_POST['password']);

    include("conexion.php");

    $_SESSION['nombre'] = $nombre;

    $consulta = mysqli_query($conexion, "INSERT INTO clientes (nombre, apellido, password) VALUES('$nombre', '$apellido', '$password') ");
    $id = mysqli_query($conexion, "SELECT id FROM usuarios");
    
    //COMO VER EL ID?
    header("Location:../login_clientes/login_clientes.html");
    /*1 125
      2 cocorojo
      4 casa
      5 999
      6 BOXEO
      7 1111
      8 dj
      9 BTS
      10 0000
      */
    ?>	


    </body>
    </html>