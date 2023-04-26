<?php
session_start();
$error=0;
if(isset($_SESSION["error"])) {
    $error = $_SESSION["error"];
    unset($_SESSION["error"]);
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Conectar a la base de datos</h1>
<form action="login.php">
    <label for="usuario">usuario</label>
    <input type="text" name="usuario" id="usuario"><br>
    <label for="password">password</label>
    <input type="password" name="password" id="password"><br>
    <button>Conectar</button>
</form>
<section id="error">
    <?php
    if($error!=0){
        echo "<p class='error'>$error</p>";
    }
    ?>
</section>
</body>
</html>