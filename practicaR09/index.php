<?php
session_start();
include_once "conexion.php";
$error="";
if(isset($_SESSION["error"])) {
    $error=$_SESSION["error"];
    unset($_SESSION["error"]);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Librería Milligram -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <link rel="stylesheet" href="css/estilos.css?v=3">
    <title>Reflexiones con formato</title>

</head>
<body>
<header class="container">
    <h1>Gestión de reflexiones</h1>
</header>
<main class="container">
    <section class="row">
        <div class="column">
            <h2><a href="nueva.php">Nueva Reflexión</a></h2>
        </div>
        <div class="column">
            <h2><a href="lista.php">Listar reflexiones</a></h2>
        </div>
    </section>
</main>
</body>
</html>