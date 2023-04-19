<?php
include_once "conexion.php";
$mensajeError="";
if(isset($_COOKIE["error"])){
    $mensajeError=getMensajeError($_COOKIE["error"]);
    setcookie("error",false,time()-1);
}
$correcto="no";
if(isset($_COOKIE["correcto"])){
    $correcto=$_COOKIE["correcto"];
    setcookie("correcto",false,time()-1);
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="anadir.php" method="get">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"><br>
    <label for="password">password</label>
    <input type="text" name="password" id="password"><br>
    <button type="submit">Añadir</button>
</form>
<section id="error">
    <?php
    if($mensajeError!=""){
        echo "<p>$mensajeError</p>";
    }
    else if($correcto=="si"){
        echo "<p>Usuario añadido</p>";
    }
    ?>
</section>
</body>
</html>