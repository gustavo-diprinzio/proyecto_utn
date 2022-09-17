<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login de Usuarios</title>
</head>

<body>

<?php
$id=$_POST['id'];
$password= md5($_POST['password']);

include("../registro_clientes/conexion.php");

$consulta=mysqli_query($conexion, "SELECT nombre, apellido FROM clientes WHERE id='$id' AND password='$password'");

$resultado=mysqli_num_rows($consulta);
echo $resultado;
if($resultado != 0){
	$respuesta=mysqli_fetch_array($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];
	$_SESSION['apellido']=$respuesta['apellido'];
	echo "Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."<br />";
}else{
	echo "No es un usuario registrado";
	include ("../registro_clientes/registro.html");
}
?>

</body>
</html>