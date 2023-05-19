<?php
session_start();
include_once "conexion.php";
$error="";
$nueva="no";
if(isset($_SESSION["error"])) {
    $error=$_SESSION["error"];
    unset($_SESSION["error"]);
}
if(isset($_SESSION["correcto"]) && $_SESSION["correcto"]=="si"){
    $nueva="si";
    unset($_SESSION["correcto"]);
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

    <link rel="stylesheet" href="css/estilos.css?v=4">
    <title>Nueva reflexión</title>

</head>
<body>
<header class="container">
    <h1>Nueva reflexión</h1>
</header>
<main class="container">
    <section class="row">
        <div class="column">
            <form action="anadir.php" method="POST">
                <label for="color">Color</label>
                <input type="color" name="color" id="color" value="#000000">
                <label for="tipo">Tipo de letra</label>
                <select name="tipo" id="tipo">
                    <option value="serif">Serif</option>
                    <option value="sans-serif" selected>Sans-serif</option>
                    <option value="monospace" >Monospace</option>
                    <option value="cursive" >Cursive</option>
                    <option value="fantasy" >Fantasy</option>
                </select>
                <label for="tam">Tamaño</label>
                <select name="tam" id="tam">
                    <option value="10">10pt</option>
                    <option value="12" selected>12pt</option>
                    <option value="14">14pt</option>
                    <option value="16">16pt</option>
                    <option value="20">20pt</option>
                    <option value="25">25pt</option>

                </select>
                <label for="texto">Texto</label>
                <textarea name="texto" id="texto" cols="30" rows="10"></textarea><br><br>
                <button>ENVIAR</button>

            </form>
        </div>
    </section>
    <section class="row">
        <div class="column">
            <a href="index.php">Volver a la portada</a>
        </div>
    </section>
    <?php
    if($error!=""){
    ?>
    <section class="row" id="errores">
        <div class="column">
            <h2>Errores</h2>
            <p><?=$error?></p>
        </div>
    </section>
    <?php
    }
    ?>
    <?php
    if($nueva=="si"){
        ?>
        <section class="row" id="nuevaCorrecta">
        <section class="row" id="nuevaCorrecta">
            <div class="column">
                <p>La reflexión se añadió correctamente</p>
            </div>
        </section>
        <?php
    }
    ?>

</main>
<script src="js/accion.js?v=2"></script>
</body>
</html>