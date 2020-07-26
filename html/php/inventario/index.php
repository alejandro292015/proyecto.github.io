
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopExpress</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> <!--Llamamos la fuente de GoogleFonts-->
    <link rel="stylesheet" href="../../../CSS/Normalize.css"> <!--Normalize es un reset para los estilos por default de cada navegador Se crea un .css a parte-->
    <link rel="stylesheet" href="../../../CSS/Styles.css"> <!--Mi hoja de estilos siempre debe ser la ultima-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

    
    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div style="max-width: 30%;">
                    <a href="../../index.php"> <!--Insertamos la imagen dentro del enlace recargar la pag al clickear sobre ella-->
                        <img src="../../../img/ShopExpress.png" alt="Logotipo Bienes Raices">
                    </a>
                </div>

                <nav class="navegacion">
                <a href="../../login.php">Iniciar sesion</a>
                    <a href="../../registro.php">Registrate</a>
                    <a href="../../nosotros.php">Nosotros</a>
                    <a href="../../anuncios.php">Anuncios</a>
                    <a href="../../contacto.php">Contacto</a>
                    <a href="../../empleados.php">Empleados</a>
                    <a href="../../articulos.php">Articulos</a>
                    <a href="../../inventario.php">Inventario</a>
                    <a href="../../logout.php">Salir</a>
                </nav>
            </div>
<?php

include_once("config.php");


$result = $soexbd->query("SELECT * FROM inventario");
?>

	
<table  style="width: 100%; height: 500px;" class="table table-bordered table-dark">


<tr class="bg-primary">
<h4></h4>
		<td><h4>CODIGO</td>
		<td><h4>PRODUCTO</td>
		<td><h4>DESCRIPCION</td>
		<td><h4>STOCK INICIAL</td>
		<td><h4>ENTRADAS</td>
		<td><h4>SALIDAS</td>
		<td><h4>TOTAL</td>
		<td><h4>ACTUALIZAR</td>
		
	</tr>
	<?php

	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";

		echo "<td><h4>".$row['CODIGO']."</td>";
		echo "<td><h4>".$row['PRODUCTO']."</td>";
		echo "<td><h4>".$row['DESCRIPCION']."</td>";
		echo "<td><h4>".$row['STOCKINI']."</td>";
		echo "<td><h4>".$row['ENTRADAS']."</td>";
		echo "<td><h4>".$row['SALIDAS']."</td>";
		echo "<td><h4>".$row['TOTAL']."</td>";

		echo "<td><h4><a href=\"edit.php?id=$row[id]\">EDITAR</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('¿Seguro desea eliminar el inventario?')\">ELIMINAR</a></td>";		
	}
	?>
</table>
        </div>
    </header>
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
          
            <a href="../../login.php">Iniciar sesion</a>
                    <a href="../../registro.php">Registrate</a>
                    <a href="../../nosotros.php">Nosotros</a>
                    <a href="../../anuncios.php">Anuncios</a>
                    <a href="../../contacto.php">Contacto</a>
                    <a href="../../empleados.php">Empleados</a>
					<a href="../../articulos.php">Articulos</a>
                    <a href="../../inventario.php">Inventario</a>
                    <a href="../../logout.php">Salir</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2020 &COPY;</p>
        </div>
    </footer>    
</html>

<!-- INDEX CONFIGURADO -->

