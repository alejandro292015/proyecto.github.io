<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>
 <b><?php echo $_SESSION['name']; ?></b>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopExpress</title>
    <link href="..https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Normalize.css">
    <link rel="stylesheet" href="../CSS/Styles.css">
</head>
<body>
    
    <header class="site-header">
        <div class="contenedor contenido-header" style="height: 12%;">
            <div class="barra">
                <div style="max-width: 30%;">
                    <a href="../html/index.php"> <!--Insertamos la imagen dentro del enlace recargar la pag al clickear sobre ella-->
                        <img src="../img/ShopExpress.png" alt="Logotipo Bienes Raices">
                    </a>
                </div>

                <nav class="navegacion">
                 <a href=""><?php echo $_SESSION['name']; ?></a>
                 <a href="login.php">Iniciar sesion</a>
                    <a href="registro.php">Registrate</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="empleados.php">Empleados</a>
                    <a href="articulos.php">Articulos</a>
                    <a href="inventario.php">Inventario</a>
                    <a href="logout.php">Salir</a>
                </nav>
            </div>
        </div>
    </header>    
        
    <h1 class="fw-300 centrar-texto">Chaquetas</h1>
    
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <img src="../img/Prod1.jpg" alt="Chaquetas">
            <div class="contenido-anuncio">
                <h3>Chaquetas</h3>
                <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                <a href="anuncio.html" class="boton boton-verde d-block">
                <img src="../img/IconoCompra.png" alt="CarritoCompras" style="height: 20px;"> $90.000</a>
            </div>
        </div>

        <div class="anuncio">
            <img src="../img/Prod1.jpg" alt="Sweaters">
            <div class="contenido-anuncio">
                <h3>Chaquetas</h3>
                <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                <a href="anuncio.html" class="boton boton-verde d-block">
                <img src="../img/IconoCompra.png" alt="CarritoCompras" style="height: 20px;"> $90.000</a>
            </div>
        </div>

        <div class="anuncio">
            <img src="../img/Prod1.jpg" alt="Sweater Cardigan">
            <div class="contenido-anuncio">
                <h3>Chaquetas</h3>
                <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                <a href="anuncio.html" class="boton boton-verde d-block">
                <img src="../img/IconoCompra.png" alt="CarritoCompras" style="height: 20px;"> $90.000</a>
            </div>
        </div>

        <div class="anuncio">
            <img src="../img/Prod1.jpg" alt="Blazers">
            <div class="contenido-anuncio">
                <h3>Chaquetas</h3>
                <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                <a href="anuncio.html" class="boton boton-verde d-block">
                <img src="../img/IconoCompra.png" alt="CarritoCompras" style="height: 20px;"> $90.000</a>
            </div>
        </div>

        <div class="anuncio">
            <img src="../img/Prod1.jpg" alt="Sweater y Sudaderas">
            <div class="contenido-anuncio">
                <h3>Chaquetas</h3>
                <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                <a href="anuncio.html" class="boton boton-verde d-block">
                <img src="../img/IconoCompra.png" alt="CarritoCompras" style="height: 20px;"> $90.000</a>
            </div>
        </div>

        <div class="anuncio">
            <img src="../img/Prod1.jpg" alt="Abrigos de invierno">
            <div class="contenido-anuncio">
                <h3>Chaquetas</h3>
                <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                <a href="anuncio.html" class="boton boton-verde d-block">
                <img src="../img/IconoCompra.png" alt="CarritoCompras" style="height: 20px;"> $90.000</a>
            </div>
        </div>

    </div> 

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
            <a href="login.php">Iniciar sesion</a>
                    <a href="registro.php">Registrate</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="empleados.php">Empleados</a>
                    <a href="articulos.php">Articulos</a>
                    <a href="inventario.php">Inventario</a>
                    <a href="logout.php">Salir</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2020 &COPY;</p>
        </div>
    </footer>
</body>
</html>