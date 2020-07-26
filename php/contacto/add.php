
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
	$Documento = $_POST['CodDocumento'];
	$Telefono1 = $_POST['Telefono1'];
	$Telefono2 = $_POST['Telefono2'];		
	$Email = $_POST['Email'];		

	if(empty($Documento) || empty($Telefono1) || empty($Telefono2) || empty($Email)){
				
		if(empty($Documento)) {
			echo "<font color='red'>Campo: CodDocumento esta vacio.</font><br/>";
		}
		
		if(empty($Telefono1)) {
			echo "<font color='red'>Campo: Telefono1 esta vacio.</font><br/>";
		}
		
		if(empty($Telefono2)) {
			echo "<font color='red'>Campo: Telefono2 esta vacio.</font><br/>";
		}
		if(empty($Email)) {
			echo "<font color='red'>Campo: Email esta vacio.</font><br/>";
		}
		

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 

		$sql = "INSERT INTO CONTACTO (CodDocumento, Telefono1, Telefono2, Email) VALUES(:CodDocumento, :Telefono1, :Telefono2, :Email)";
		$query = $SOEXBD->prepare($sql);
				
		$query->bindparam(':CodDocumento', $Documento);
		$query->bindparam(':Telefono1', $Telefono1);
		$query->bindparam(':Telefono2', $Telefono2);
		$query->bindparam(':Email', $Email);
		$query->execute();
		

		echo "<font color='green'>Contacto agregado con exito.";
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
