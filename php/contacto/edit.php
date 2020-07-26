<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
        $Documento = $_POST['CodDocumento'];
		$Telefono1 = $_POST['Telefono1'];
		$Telefono2 = $_POST['Telefono2'];
		$Email = $_POST['Email'];

	if(empty($Documento) || empty($Telefono1) || empty($Telefono2) || empty($Email)) {
				
		if(empty($Documento)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($Telefono1)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($Telefono2)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
		if(empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	

		$sql = "UPDATE CONTACTO SET CodDocumento=:CodDocumento, Telefono1=:Telefono1, Telefono2=:Telefono2 , Email=:Email WHERE CodDocumento=:CodDocumento";
		$query = $SOEXBD->prepare($sql);
			
		$query->bindparam(':CodDocumento', $Documento);
		$query->bindparam(':Telefono1', $Telefono1);
		$query->bindparam(':Telefono2', $Telefono2);
		$query->bindparam(':Email', $Email);
		$query->execute();
		
	
		
		
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$sql = "SELECT * FROM CONTACTO WHERE CodDocumento=:CodDocumento";
$query = $SOEXBD->prepare($sql);
$query->execute(array(':CodDocumento' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $Documento = $row['CodDocumento'];
	$Telefono1 = $row['Telefono1'];
	$Telefono2 = $row['Telefono2'];
	$Email = $row['Email'];
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
        
    <h1 class="fw-300 centrar-texto">Contacto</h1>
    <img src="../../../img/Contacto.jpg" alt="Imagen Principal" style="width: 100%;">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de contacto</h2>

        <form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Documento</td>
				<td><input type="text" name="CodDocumento" value="<?php echo $Documento;?>"></td>
			</tr>
			<tr> 
				<td>Telefono1</td>
				<td><input type="text" name="Telefono1" value="<?php echo $Telefono1;?>"></td>
			</tr>
			
			<tr> 
				<td>Telefono2</td>
				<td><input type="text" name="Telefono2" value="<?php echo $Telefono2;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="Email" value="<?php echo $Email;?>"></td>
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