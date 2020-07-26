
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

		include_once('config.php');

		if(isset($_POST['Submit'])) {	

			$CODIGO = $_POST['CODIGO'];
			$PRODUCTO = $_POST['PRODUCTO'];
			$DESCRIPCION = $_POST['DESCRIPCION'];
			$STOCKINI = $_POST['STOCKINI'];		
			$ENTRADAS = $_POST['ENTRADAS'];		
			$SALIDAS = $_POST['SALIDAS'];
			$TOTAL = 0;
			
			if ($TOTAL <= 0){
				$TOTAL = ($STOCKINI-$SALIDAS)+$ENTRADAS;
			} else ($TOTAL > 0){
				$TOTAL = ($TOTAL-$SALIDAS)+$ENTRADAS
			};

			if (empty($CODIGO) || empty($PRODUCTO) || empty($DESCRIPCION) || empty($STOCKINI)) {
						
				if(empty($CODIGO)) {
					echo "<font color='red'>Campo: esta vacio.</font><br/>";
				}
				if(empty($PRODUCTO)) {
					echo "<font color='red'>Campo: esta vacio.</font><br/>";
				}
				if(empty($DESCRIPCION)) {
					echo "<font color='red'>Campo: esta vacio.</font><br/>";
				}
				if(empty($STOCKINI)) {
					echo "<font color='red'>Campo: esta vacio.</font><br/>";
				}
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

			} else { 

				$sql = "INSERT INTO inventario(CODIGO, PRODUCTO, DESCRIPCION, STOCKINI, ENTRADAS, SALIDAS, TOTAL) 
				VALUES(:CODIGO, :PRODUCTO, :DESCRIPCION, :STOCKINI, :ENTRADAS, :SALIDAS, :TOTAL)";

				try{
				$query = $soexbd-> prepare ($sql);
				
				$query-> bindparam (':CODIGO', $CODIGO);
				$query-> bindparam (':PRODUCTO', $PRODUCTO);
				$query-> bindparam (':DESCRIPCION', $DESCRIPCION);
				$query-> bindparam (':STOCKINI', $STOCKINI);
				$query-> bindparam (':ENTRADAS', $ENTRADAS);
				$query-> bindparam (':SALIDAS', $SALIDAS);
				$query-> bindparam (':TOTAL', $TOTAL);

				echo $query-> execute ();
				}catch (PDOException $ex){
					echo $ex->getMessage();
				};
				echo "<font color='green'>Información agregada exitosamente.";
				echo "<br/><a href='index.php'>View Result</a>";
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

<!-- add.php configurado -->
