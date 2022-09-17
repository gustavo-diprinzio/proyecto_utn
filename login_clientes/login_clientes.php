<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Registro Clientes</title>
</head>
<body>
    <header>
        <div class="header_titulo"> 
            <a href="../index.php"> <img src="../menu-img/logo.jfif" alt=""> </a>
        </div>
        <nav class="navegacion" id="navegacion">
            <ul class="menu">
                <li><a class="texto_nav" href="../registro_clientes/registro.html">Registrarse</a> </li>
                <li><a class="texto_nav" href="#">Registro/Inicio Secion Empleados</a></li>
            </ul>
        </nav>
    </header>

    <section id="formulario">

        <div class="columnas_de_contacto">
            <h2>Beneficios</h2>
            <p>Registrandote podras obetener descuentos unicos en nuestros productos.</p>
            <p>Recuerda compra felicidad en forma de hamburguesa.</p>
            <img src="../menu-img/burger.png" alt="">
        </div>

        <div class="columnas_de_contacto">
            <h2>Login</h2>
            <form action="login.php" method="post">

                    <div class="nombreyapellido">
                        <label> Id </label>
                        <input name="id" type="number" placeholder="Ingresá tu id" required>
                    </div>
              
             <div class="bloque_datos">
                 <label > Contraseña </label>  
                <input type="password" name="password" placeholder=" Ingresá su contraseña" required>
            </div>

             <div class="submit"> 
                <input type="submit" value="Iniciar Secion"/>	
            </div>    
         </div>
    </form>
    </section>
    
</body>
</html>