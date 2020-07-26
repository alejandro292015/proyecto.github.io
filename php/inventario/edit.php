<?php

	include_once("config.php");

	if(isset($_POST['update']))
	{	

		$id = $_POST['id'];
		$CODIGO = $_POST['CODIGO'];
		$PRODUCTO = $_POST['PRODUCTO'];
		$DESCRIPCION = $_POST['DESCRIPCION'];
		$STOCKINI = $_POST['STOCKINI'];		
		$ENTRADAS = $_POST['ENTRADAS'];		
		$SALIDAS = $_POST['SALIDAS'];
		$TOTAL = $_POST['TOTAL'];

		// $TOTAL = ($TOTAL-$SALIDAS)+$ENTRADAS

		$sql = "UPDATE inventario SET  id=:id, CODIGO=:CODIGO, PRODUCTO=:PRODUCTO, DESCRIPCION=:DESCRIPCION, 
		ENTRADAS=:ENTRADAS, SALIDAS=:SALIDAS, TOTAL=:TOTAL WHERE id=:id";
			
		$query = $soexbd->prepare($sql);
					
		$query->bindparam(':id', $id);
		$query->bindparam(':CODIGO', $CODIGO);
		$query->bindparam(':PRODUCTO', $PRODUCTO);
		$query->bindparam(':DESCRIPCION', $DESCRIPCION);
		$query-> bindparam (':STOCKINI', $STOCKINI);
		$query->bindparam(':ENTRADAS', $ENTRADAS);
		$query->bindparam(':SALIDAS', $SALIDAS);
		$query->bindparam(':TOTAL', $TOTAL);

		$query->execute();
			
			
			header("Location: index.php");	
	}
?>
<?php

$id = $_GET['id'];

$sql = "SELECT * FROM inventario WHERE id = :id";
$query = $soexbd->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{   

	
    $CODIGO = $row['CODIGO'];
	$PRODUCTO = $row['PRODUCTO'];
	$DESCRIPCION = $row['DESCRIPCION'];
	$STOCKINI = $row['STOCKINI'];
	$ENTRADAS = $row['ENTRADAS'];
	$SALIDAS = $row['SALIDAS'];
	$TOTAL = $row['TOTAL'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../../../CSS/Normalize.css">
    <link rel="stylesheet" href="../../../CSS/Styles.css">
</head>
<body>
    
    <header class="site-header">
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
        </div>
    </header>    
	<h1 class="fw-300 centrar-texto">Empleado</h1>
    <img src="../../../img/invntario.jpg" alt="Imagen Principal" style="width: 100%;">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de empleado</h2>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Código</td>
				<td><input type="text" name="CODIGO" value="<?php echo $CODIGO;?>"></td>
			</tr>
			<tr> 
				<td>Producto</td>
				<td><input type="text" name="PRODUCTO" value="<?php echo $PRODUCTO;?>"></td>
			</tr>
			<tr> 
				<td>Descripción</td>
				<td><input type="text" name="DESCRIPCION" value="<?php echo $DESCRIPCION;?>"></td>
			</tr>
			<tr> 
				<td>Stock inicial</td>
				<td><input type="text" name="STOCKINI" value="<?php echo $STOCKINI;?>"></td>
			</tr>
			<tr> 
				<td>Entradas</td>
				<td><input type="text" name="ENTRADAS" value="<?php echo $ENTRADAS;?>"></td>
			</tr>
			<tr> 
				<td>Salidas</td>
				<td><input type="text" name="SALIDAS" value="<?php echo $SALIDAS;?>"></td>
			</tr>
			<tr> 
				<td>Total</td>
				<td><input type="text" name="TOTAL" value="<?php echo $TOTAL;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
			</main>
		</body>

</html>

