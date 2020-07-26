
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
        
    <h1 class="fw-300 centrar-texto">Articulos</h1>
    <img src="../img/conmactos.jpg" alt="Imagen Principal" style="width: 100%;">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de articulo nuevo</h2>

        <form action="php/articulos/add.php" method="post" name="form1">
		<table width="35%" border="0">
        <tr> 
				<td>ID DE LA articulo</td>
				<td><input type="text" name="CodArticulo"></td>
			</tr>
			<tr> 

				<td>ID DE LA CATEGORIA</td>
				<td><input type="text" name="CodCategoria"></td>
			</tr>
			<tr> 
				<td>ID DE LA LINEA</td>
				<td><input type="text" name="Codlinea"></td>
			</tr>
			<tr> 
				<td>CODIGO DE BARRAS</td>
				<td><input type="text" name="CodigoBarras"></td>
			</tr>
			<tr> 
				<td>Descripcion</td>
				<td><input type="text" name="Descripcion"></td>
			</tr>
            <tr> 
                <td>SALDO</td>
                <td><input type="text" name="Saldo"></td>
            </tr>
            <td>VALOR DEL ARTICULO</td>
            <td><input type="text" name="Valor"></td>
        </tr>
        <tr> 
            <td>IVA</td>
            <td><input type="text" name="Iva"></td>
        </tr>
         <tr> 
        <td>Estado</td>
         <td><input type="text" name="Estado"></td>
         </tr>
        <tr> 
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="AGREGAR"></td>
			</tr>
		</table>
	</form>
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
            <p class="copyright">Todos los Derechos Reservados 2020 &COPY;</p>
        </div>
    </footer>
</body>
</html>