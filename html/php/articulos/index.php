
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
                    <a href="../html/index.php "> <!--Insertamos la imagen dentro del enlace recargar la pag al clickear sobre ella-->
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


$result = $soexbd->query("SELECT * FROM articulos");
?>


<table  style="width: 100%; height: 500px;" class="table table-bordered table-dark">


<tr class="bg-primary">
		<td><h4>CodArticulo</h4></td>
		<td><h4>CodCategoria</h4></td>
		<td><h4>Codlinea</h4></td>
		<td><h4>CodigoBarras</h4></td>
		<td><h4>Descripcion</h4></td>
		<td><h4>Saldo</h4></td>
		<td><h4>Valor</h4></td>
		<td><h4>Iva</h4></td>
		<td><h4>Estado</h4></td>
        <td><h4>UPDATE</h4></td>	
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td><h4>".$row['CodArticulo']."</h4></td>";
		echo "<td><h4>".$row['CodCategoria']."</h4></td>";
		echo "<td><h4>".$row['Codlinea']."</h4></td>";
		echo "<td><h4>".$row['CodigoBarras']."</h4></td>";
		echo "<td><h4>".$row['Descripcion']."</h4></td>";
		echo "<td><h4>".$row['Saldo']."</h4></td>";
		echo "<td><h4>".$row['Valor']."</h4></td>";
		echo "<td><h4>".$row['Iva']."</h4></td>";
		echo "<td><h4>".$row['Estado']."</h4></td>";
		echo "<td><h4><a href=\"edit.php?id=$row[CodArticulo]\">EDITAR</a> | <a href=\"delete.php?id=$row[CodArticulo]\" onClick=\"return confirm('seguro que quiere eliminar este Articulo?')\">ELIMINAR</a></h4></td>";		
	}
	?>
	</table>
	</table>
        </div>
	</header>  

</html>

