
<?php
require 'config.php';

if(isset($_POST['login'])) {
    $errMsg = '';

    // Get data from FORM
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == '')
        $errMsg = 'Ingrese un usuario';
    if($password == '')
        $errMsg = 'ingrese una contraseña';

    if($errMsg == '') {
        try {
            $stmt = $connect->prepare('SELECT id, fullname, username, password, secretpin FROM users WHERE username = :username');
            $stmt->execute(array(
                ':username' => $username
                ));
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if($data == false){
                $errMsg = "Usuario $username no encontrado.";
            }
            else {
                if($password == $data['password']) {
                    $_SESSION['name'] = $data['fullname'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['password'] = $data['password'];
                    $_SESSION['secretpin'] = $data['secretpin'];

                    header('Location: index.php');
                    exit;
                }
                else
                    $errMsg = 'Contraseña Incorrecta.';
            }
        }
        catch(PDOException $e) {
            $errMsg = $e->getMessage();
        }
    }
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
                    <a href="../html/index.php">
                        <img src="../img/ShopExpress.png" alt="Logotipo Bienes Raices">
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
        
    <h1 class="fw-300 centrar-texto">Ingreso de Usuarios</h1>
    <img src="../img/imagen.png" alt="Imagen Principal" style="width: 100%; opacity: 20%">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">¡Bienvenido una vez más!</h2>

        <form action="" method="post">
            <fieldset>
                <legend>Información de usuario</legend>
                <label for="usuario">Usuario: </label>
                <input type="text" name="username" placeholder="usuario" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />


                <label for="Clave">Contraseña: </label>
                <input type="password" name="password" placeholder="contraseña" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" autocomplete="off" class="box" /><br/><br />

            </fieldset>

			<input type="submit"  name='login' value="Ingresar" class='bti btn-succes'/><br />
    

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