
    
<?php
    $producto = $_POST['producto'];

    include("registro_clientes/conexion.php");

    $_SESSION['producto'] = $producto;

    $consulta = mysqli_query($conexion, "INSERT INTO pedidos (producto) VALUES('$producto') ");
    
    header("Location:login_clientes/login_clientes.php");

?>	
