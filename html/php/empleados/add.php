
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
	$Documento = $_POST['DocEmpleado'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];		
	$Direccion = $_POST['Direccion'];		

	if(empty($Documento) || empty($Nombre) || empty($Apellido) || empty($Direccion)){
				
		if(empty($Documento)) {
			echo "<font color='red'>Campo: DocEmpleado esta vacio.</font><br/>";
		}
		
		if(empty($Nombre)) {
			echo "<font color='red'>Campo: Nombre esta vacio.</font><br/>";
		}
		
		if(empty($Apellido)) {
			echo "<font color='red'>Campo: curso esta vacio.</font><br/>";
		}
		if(empty($Direccion)) {
			echo "<font color='red'>Campo: curso esta vacio.</font><br/>";
		}
		

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 

		$sql = "INSERT INTO EMPLEADOS(DocEmpleado, Nombre, Apellido, Direccion) VALUES(:DocEmpleado, :Nombre, :Apellido, :Direccion)";
		$query = $SOEXBD->prepare($sql);
				
		$query->bindparam(':DocEmpleado', $Documento);
		$query->bindparam(':Nombre', $Nombre);
		$query->bindparam(':Apellido', $Apellido);
		$query->bindparam(':Direccion', $Direccion);
		$query->execute();
		

	
		echo "<font color='green'>Empleado agregado con exito.";
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
