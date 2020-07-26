
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
<body>
    
    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div style="max-width: 30%;">
                    <a href="../../../index.php"> <!--Insertamos la imagen dentro del enlace recargar la pag al clickear sobre ella-->
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

$result = $SOEXBD->query("SELECT * FROM CONTACTO");
?>


<table  style="width: 100%;
height: 500px;" class="table table-bordered table-dark">

<tr class="bg-primary">
		<td> <h4> <h4> Documento</h4></h4></td>
		<td> <h4><h4>Telefono_1</h4></h4></td>
		<td> <h4><h4>Telefono_2</h4></h4></td>
		<td> <h4><h4>Email</h4></h4></td>
		<td> <h4><h4>update</h4></h4></td>
</tr>
<br>
<br>


	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td> <h4>".$row['CodDocumento']."</h4></td>";
		echo "<td> <h4>".$row['Telefono1']."</h4></td>";
		echo "<td> <h4>".$row['Telefono2']."</h4></td>";	
		echo "<td> <h4>".$row['Email']."</h4></td>";	
		echo "<td><a href=\"edit.php?id=$row[CodDocumento]\">EDITAR</a> | <a href=\"delete.php?id=$row[CodDocumento]\" onClick=\"return confirm('Seguro que quieres eliminar este Contacto?')\">ELIMINAR</a></td>";		
		
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

