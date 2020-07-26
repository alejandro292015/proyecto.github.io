
<?php
require 'config.php';

if(isset($_POST['register'])) {
    $errMsg = '';

    // Get data from FROM
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $secretpin = $_POST['secretpin'];

    if($fullname == '')
        $errMsg = 'Ingrese su Nombre Completo';
    if($username == '')
        $errMsg = 'Ingrese su Usuario';
    if($password == '')
        $errMsg = 'Ingrese su Contraseña';
    if($secretpin == '')
        $errMsg = 'Ingrese su recordatorio';

    if($errMsg == ''){
        try {
            $stmt = $connect->prepare('INSERT INTO users (fullname, username, password, secretpin) VALUES (:fullname, :username, :password, :secretpin)');
            $stmt->execute(array(
                ':fullname' => $fullname,
                ':username' => $username,
                ':password' => $password,
                ':secretpin' => $secretpin
                ));
            header('Location: index.php
            ');
            exit;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}

if(isset($_GET['action']) && $_GET['action'] == 'joined') {
    $errMsg = 'Registro Exitoso!!. Ahora puede Ingresar <a href="login.php">Ingreso</a>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopExpress</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Normalize.css">
    <link rel="stylesheet" href="../CSS/Styles.css">
</head>
<body>
    
    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div style="max-width: 30%;">
                    <a href="../html/index.html">
                        <img src="../img/ShopExpress.png" alt="Logotipo Bienes Raices" class="logo"">
                    </a>
                </div>

                <nav class="navegacion">
                <a href="login.php">Iniciar sesion</a>
                    <a href="registro.php">Registrate</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="empleados.php">Empleados</a>
                    <a href="articulos.php">Articulos</a>
                    <a href="inventario.php">Inventario</a>
                    <a href="logout.php">Salir</a>
                </nav>
            </div>
        </div>
    </header>    
        
    <h1 class="fw-300 centrar-texto">Registro de Usuarios</h1>
    <img src="../img/imagen.png" alt="Imagen Principal" style="width: 100%; opacity: 20%">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">¡Conviértete en un miembro más de esta gran familia!</h2>

        <form action="" method="post">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="fullname">Nombre: </label>
                <input type="text" name="fullname" placeholder="Nombre Completo" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'] ?>" autocomplete="off" class="box"/><br /><br />
            
                <label for="username">Usuario: </label>
                <input type="text" name="username" placeholder="Ususario" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />

                <label for="password">Contraseña: </label>
                <input type="password" name="password" placeholder="Contraseña" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="box" /><br/><br />


                <label for="PIN">Código de seguridad (PIN): </label>
                <input type="text" name="secretpin" placeholder="Pin secreto (numeros)" value="<?php if(isset($_POST['secretpin'])) echo $_POST['secretpin'] ?>" autocomplete="off" class="box"/><br /><br />


            </fieldset>
        
			<input type="submit" name='register' value="Registro" class='submit'/><br />


        </form>
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
            <a href="login.php">Iniciar sesion</a>
                    <a href="registro.php">Registrate</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="empleados.php">Empleados</a>
                    <a href="articulos.php">Articulos</a>
                    <a href="inventario.php">Inventario</a>
                    <a href="logout.php">Salir</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2020 &COPY;</p>
        </div>
    </footer>
</body>
</html>