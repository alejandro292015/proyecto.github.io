
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
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
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
			echo "<font color='red'>Campo: esta vacio.</font><br/>";
		}
		if(empty($CodCategoria)) {
			echo "<font color='red'>Campo: esta vacio.</font><br/>";
		}
		if(empty($Codlinea)) {
			echo "<font color='red'>Campo: esta vacio.</font><br/>";
		}
		if(empty($CodigoBarras)) {
			echo "<font color='red'>Campo: esta vacio.</font><br/>";
		}
		if(empty($Descripcion)) {
			echo "<font color='red'>Campo: esta vacio.</font><br/>";
		}
		if(empty($Saldo)) {
			echo "<font color='red'>Campo: esta vacio.</font><br/>";
		}
		if(empty($Valor)) {
			echo "<font color='red'>Campo: esta vacio.</font><br/>";
		}
		if(empty($Iva)) {
			echo "<font color='red'>Campo: esta vacio.</font><br/>";
		}
	    if(empty($Estado)) {
         	echo "<font color='red'>Campo: esta vacio.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 

		$sql = "INSERT INTO articulos(CodArticulo, CodCategoria, Codlinea, CodigoBarras, Estado, Descripcion,Valor, Iva, Saldo) 
		VALUES(:CodArticulo, :CodCategoria, :Codlinea, :CodigoBarras, :Estado, :Descripcion,:Valor, :Iva, :Saldo)";

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
		

		echo "<font color='green'>Articulo agregado con exito.";
		echo "<br/><a href='index.php'>VER REGISTROS</a>";
	}
}
?>
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
