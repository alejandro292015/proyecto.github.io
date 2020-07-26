<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];

	$CodArticulo = $_POST['CodArticulo'];
	$CodCategoria = $_POST['CodCategoria'];
	$Codlinea = $_POST['Codlinea'];
	$CodigoBarras = $_POST['CodigoBarras'];
	$Descripcion = $_POST['Descripcion'];
	$Saldo = $_POST['Saldo'];	
	$Valor = $_POST['Valor'];	
	$Iva = $_POST['Iva'];		
	$Estado = $_POST['Estado'];		

	if(empty($CodArticulo) || empty($CodCategoria) || empty($Codlinea) || empty($CodigoBarras) 
	|| empty($Estado) || empty($Descripcion) || empty($Iva) || empty($Saldo) || empty($Valor)) {
				
		if(empty($CodArticulo)) {
			echo "<font color='red'>CodArticulo: No pueden ser igual a 0.</font><br/>";
		}
		if(empty($CodCategoria)) {
			echo "<font color='red'>CodCategoria: No pueden ser igual a 0.</font><br/>";
		}
		if(empty($Codlinea)) {
			echo "<font color='red'>Codlinea: No pueden ser igual a 0.</font><br/>";
		}
		if(empty($CodigoBarras)) {
			echo "<font color='red'>CodigoBarras: No pueden ser igual a 0.</font><br/>";
		}
		if(empty($Descripcion)) {
			echo "<font color='red'>Campo: No pueden ser igual a 0.</font><br/>";
		}
		if(empty($Saldo)) {
			echo "<font color='red'>Campo: No pueden ser igual a 0.</font><br/>";
		}
		if(empty($Valor)) {
			echo "<font color='red'>Campo: No pueden ser igual a 0.</font><br/>";
		}
		if(empty($Iva)) {
			echo "<font color='red'>Campo: No pueden ser igual a 0.</font><br/>";
		}
	    if(empty($Estado)) {
         	echo "<font color='red'>Campo: No pueden ser igual a 0.</font><br/>";
		}

	} else {	

		$sql = "UPDATE articulos SET   CodArticulo=:CodArticulo, CodCategoria=:CodCategoria, CodigoBarras=:CodigoBarras , Codlinea=:Codlinea, Descripcion=:Descripcion, 
		Estado=:Estado, Valor=:Valor, Iva=:Iva, Saldo=:Saldo WHERE CodArticulo=:CodArticulo";

		$query = $soexbd->prepare($sql);
				
		$query->bindparam(':CodArticulo', $CodArticulo);
		$query->bindparam(':CodCategoria', $CodCategoria);
		$query->bindparam(':Codlinea', $Codlinea);
		$query->bindparam(':CodigoBarras', $CodigoBarras);
		$query->bindparam(':Descripcion', $Descripcion);
		$query->bindparam(':Saldo', $Saldo);
		$query->bindparam(':Valor', $Valor);
		$query->bindparam(':Iva', $Iva);
		$query->bindparam(':Estado', $Estado);
		$query->execute();
		
		
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];

$sql = "SELECT * FROM articulos WHERE CodArticulo = :CodArticulo";
$query = $soexbd->prepare($sql);
$query->execute(array(':CodArticulo' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{   

    $CodArticulo = $row['CodArticulo'];
	$CodCategoria = $row['CodCategoria'];
	$Codlinea = $row['Codlinea'];
	$CodigoBarras = $row['CodigoBarras'];
	$Descripcion = $row['Descripcion'];
	$Saldo = $row['Saldo'];
	$Valor = $row['Valor'];
	$Iva = $row['Iva'];
	$Estado = $row['Estado'];


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
	<h1 class="fw-300 centrar-texto">Articulos</h1>
    <img src="../../../img/conmactos.jpg" alt="Imagen Principal" style="width: 100%;">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de Articulos</h2>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>id de la Articulo</td>
				<td><input type="text"  name="CodArticulo" value="<?php echo $CodArticulo;?>"></td>
			</tr>
			<tr> 
				<td>id de la Categoria</td>
				<td><input type="text"   name="CodCategoria" value="<?php echo $CodCategoria;?>"></td>
			</tr>
			<tr> 
				<td>codigo de Barras</td>
				<td><input type="text"  name="CodigoBarras" value="<?php echo $CodigoBarras;?>"></td>
			</tr>
			<tr> 
				<td>codigo de Linea</td>
				<td><input type="text"   name="Codlinea" value="<?php echo $Codlinea;?>"></td>
			</tr>
			<tr> 
				<td>Descripcion</td>
				<td><input type="text" name="Descripcion" value="<?php echo $Descripcion;?>"></td>
			</tr>
			<tr> 
				<td>Estado del producto</td>
				<td><input type="text" name="Estado" value="<?php echo $Estado;?>"></td>
			</tr>
			<tr> 
				<td>valor</td>
				<td><input type="text" name="Valor" value="<?php echo $Valor;?>"></td>
			</tr>
			<tr> 
				<td>Iva</td>
				<td><input type="text" name="Iva" value="<?php echo $Iva;?>"></td>
			</tr>
			<tr> 
				<td>Saldo</td>
				<td><input type="text" name="Saldo" value="<?php echo $Saldo;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="ACTUALIZAR"></td>
			</tr>
		</table>
		</main>
		</form>


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
</body>
</html>

