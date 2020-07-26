<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
        $Documento = $_POST['DocEmpleado'];
		$Nombre = $_POST['Nombre'];
		$Apellido = $_POST['Apellido'];
		$Direccion = $_POST['Direccion'];

	if(empty($Documento) || empty($Nombre) || empty($Apellido) || empty($Direccion)) {
				
		if(empty($Documento)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($Nombre)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($Apellido)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
		if(empty($Direccion)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	

		$sql = "UPDATE EMPLEADOS SET DocEmpleado=:DocEmpleado, Nombre=:Nombre, Apellido=:Apellido , Direccion=:Direccion WHERE DocEmpleado=:DocEmpleado";
		$query = $SOEXBD->prepare($sql);
			
		$query->bindparam(':DocEmpleado', $Documento);
		$query->bindparam(':Nombre', $Nombre);
		$query->bindparam(':Apellido', $Apellido);
		$query->bindparam(':Direccion', $Direccion);
		$query->execute();
		
	
		
		
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$sql = "SELECT * FROM EMPLEADOS WHERE DocEmpleado=:DocEmpleado";
$query = $SOEXBD->prepare($sql);
$query->execute(array(':DocEmpleado' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $Documento = $row['DocEmpleado'];
	$Nombre = $row['Nombre'];
	$Apellido = $row['Apellido'];
	$Direccion = $row['Direccion'];
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
    <img src="../../../img/empleados.jpg" alt="Imagen Principal" style="width: 100%;">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de empleado</h2>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Documento</td>
				<td><input type="text" name="DocEmpleado" value="<?php echo $Documento;?>"></td>
			</tr>
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="Nombre" value="<?php echo $Nombre;?>"></td>
			</tr>
			
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="Apellido" value="<?php echo $Apellido;?>"></td>
			</tr>
			<tr> 
				<td>Direccion</td>
				<td><input type="text" name="Direccion" value="<?php echo $Direccion;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="ACTUALIZAR"></td>
			</tr>
		</table>
		</form>
    </main>

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

