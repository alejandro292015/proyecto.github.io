<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopExpress</title>
    <link ><a href="..https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Normalize.css">
    <link rel="stylesheet" href="../CSS/Styles.css">
</head>
<body>
    
    <header class="site-header">
        <div class="contenedor contenido-header">
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
        
    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Nuestros Productos</h2>
        
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="../img/Prod1.jpg" alt="Chaquetas">
                <div class="contenido-anuncio">
                    <h3>Chaquetas</h3>
                    <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>

                    <a href="../html/anuncio.html" class="boton boton-amarillo d-block">Ver Productos</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="../img/Prod2.jpg" alt="Sweaters">
                <div class="contenido-anuncio">
                    <h3>Sweaters</h3>
                    <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                    
                    <a href="../html/anuncio.html" class="boton boton-amarillo d-block">Ver Productos</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="../img/Prod3.jpg" alt="Sweater Cardigan">
                <div class="contenido-anuncio">
                    <h3>Sweater Cardigan</h3>
                    <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                        
                    <a href="../html/anuncio.html" class="boton boton-amarillo d-block">Ver Productos</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="../img/Prod4.jpg" alt="Blazers">
                <div class="contenido-anuncio">
                    <h3>Blazers</h3>
                    <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>

                    <a href="../html/anuncio.html" class="boton boton-amarillo d-block">Ver Productos</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="../img/Prod5.jpg" alt="Sweater y Sudaderas">
                <div class="contenido-anuncio">
                    <h3>Sudaderas</h3>
                    <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                    
                    <a href="../html/anuncio.html" class="boton boton-amarillo d-block">Ver Productos</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="../img/Prod6.jpg" alt="Abrigos de invierno">
                <div class="contenido-anuncio">
                    <h3>Abrigos de invierno</h3>
                    <p>En fringilla felis ac egestas elementum. Pellentesque vitae tellus eu justo.</p>
                        
                    <a href="../html/anuncio.html" class="boton boton-amarillo d-block">Ver Productos</a>
                </div>
            </div>

        </div> 
    </main>

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