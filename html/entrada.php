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
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Normalize.css">
    <link rel="stylesheet" href="../CSS/Styles.css">
</head>
<body>
    
    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="../html/index.php">
                    <img src="../img/logo.svg" alt="Logotipo Bienes Raices">
                </a>

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
        
    <h1 class="fw-300 centrar-texto">Consejos para tener una alberca en tu casa sin gastar demasiado</h1>
    <img src="../img/destacada2.jpg" alt="imagen principal">

    <main class="contenedor secciom contenido-centrado texto-entrada">
        <p>Escrito el: <span>18/04/2019</span> por: <span>Admin</span></p>

        <p>Maecenas ornare purus ac elementum venenatis. Vivamus molestie luctus sapien, ut scelerisque risus 
        ultricies at. Etiam gravida fringilla interdum. Nullam fermentum erat tincidunt rhoncus viverra. 
        Vestibulum sodales tincidunt consectetur. Fusce nec consequat lacus. Praesent maximus mattis dolor 
        quis scelerisque. Fusce bibendum eget arcu non commodo. Donec suscipit aliquam leo. Nulla facilisi.
        Quisque maximus nulla quis ligula facilisis ullamcorper. Aliquam vel tempor nulla. Sed quis nibh 
        cursus, efficitur erat quis, fringilla libero. Vivamus sapien nibh, imperdiet sit amet urna nec, 
        tincidunt ullamcorper nunc.</p>

        <p>Etiam gravida fringilla interdum. Nullam fermentum erat tincidunt rhoncus viverra. 
        Vestibulum sodales tincidunt consectetur. Fusce nec consequat lacus. Praesent maximus mattis dolor 
        quis scelerisque. Fusce bibendum eget arcu non commodo. Donec suscipit aliquam leo. Nulla facilisi.
        Quisque maximus nulla quis ligula facilisis ullamcorper. Aliquam vel tempor nulla. Sed quis nibh 
        cursus, efficitur erat quis, fringilla libero. Vivamus sapien nibh, imperdiet sit amet urna nec, 
        tincidunt ullamcorper nunc.</p>

        <p>Vestibulum sed erat condimentum, aliquam enim vitae, imperdiet nisi. Donec non odio velit. Sed 
        sollicitudin condimentum consectetur. Quisque eget ornare mauris, non cursus tortor. Ut a justo 
        leo. Etiam ornare libero nec nulla commodo ullamcorper. Mauris nec lacus et mi iaculis aliquet at 
        non ipsum. In quis placerat arcu.</p>

        <p>Vestibulum sed erat condimentum, aliquam enim vitae, imperdiet nisi. Donec non odio velit. Sed 
        sollicitudin condimentum consectetur. Quisque eget ornare mauris, non cursus tortor. Ut a justo 
        leo. Etiam ornare libero nec nulla commodo ullamcorper. Mauris nec lacus et mi iaculis aliquet at 
        non ipsum. In quis placerat arcu. Mauris dignissim venenatis pretium. Nunc sollicitudin placerat 
        nibh, nec tincidunt quam suscipit ac.</p>
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
            <p class="copyright">Todos los Derechos Reservados 2019 &COPY;</p>
        </div>
    </footer>
</body>
</html>