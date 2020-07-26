<!--<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopExpress</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> <!--Llamamos la fuente de GoogleFonts-->
    <link rel="stylesheet" href="../CSS/Normalize.css"> <!--Normalize es un reset para los estilos por default de cada navegador Se crea un .css a parte-->
    <link rel="stylesheet" href="../CSS/Styles.css"> <!--Mi hoja de estilos siempre debe ser la ultima-->
</head>
<body>
    
    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div style="max-width: 30%;">
                    <a href="../html/index.php "> <!--Insertamos la imagen dentro del enlace recargar la pag al clickear sobre ella-->
                        <img src="../img/ShopExpress.png" alt="Logotipo Bienes Raices">
                    </a>
                </div>
                <nav class="navegacion">
                <a href=""><?php echo $_SESSION['name']; ?></a>
                <
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

            <h1>El Mejor Estilo del Mercado</h1>
        </div> <!--Cierre de contenedor-->
    </header>    
        
    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Más Sobre Nosotros</h2>
        
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="../img/Seguridad.png" alt="Icono Seguridad">
                <h3>Seguridad</h3>
                <p>Recusandae, dignissimos quo eaque aliquid dicta nulla id beatae sint, provident adipisci 
                consequuntur eum? Sequi labore temporibus laboriosam quisquam, ullam fuga quas.</p>  
            </div>            

            <div class="icono">
                <img src="../img/El Mejor Precio.png" alt="Icono Mejor Precio">
                <h3>El Mejor Precio</h3>
                <p>Recusandae, dignissimos quo eaque aliquid dicta nulla id beatae sint, provident adipisci 
                consequuntur eum? Sequi labore temporibus laboriosam quisquam, ullam fuga quas.</p>
            </div>

            <div class="icono">
                <img src="../img/A Tiempo.png" alt="Icono A Tiempo">
                <h3>A Tiempo</h3>
                <p>Recusandae, dignissimos quo eaque aliquid dicta nulla id beatae sint, provident adipisci 
                consequuntur eum? Sequi labore temporibus laboriosam quisquam, ullam fuga quas.</p>
            </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Nuestras Líneas</h2>
        
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
        </div>

            <div class="ver-todas">
                <a href="../html/anuncios.html" class="boton boton-verde">Ver Todas</a>
            </div>
    </main>

    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contaco contigo 
            a la brevedad</p>
            <a href="../html/contacto.html" class="boton boton-amarillo">Contáctanos</a>
        </div>
    </section> 

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