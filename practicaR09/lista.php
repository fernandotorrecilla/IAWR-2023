<?php
session_start();
include_once "conexion.php";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de reflexiones</title>
    <!-- Librería Milligram -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <link rel="stylesheet" href="css/estilos.css?v=5"></head>
    <title>Lista de reflexiones</title>
</head>
<body>
<header>
    <h1>Lista de reflexiones</h1>
    <p class="centro"><a href="index.php">Volver a la portada</a></p>
</header>
<main class="container">
    <?php
    $error="";
    try{
        $con=getConexion();
        $sql="SELECT id_reflexion,texto,color,tam,tipo FROM reflexiones ".
            "ORDER By id_reflexion DESC";
        $st=$con->prepare($sql);
        $st->execute();
        $st->bind_result($id_reflexion,$texto,$color,$tam,$tipo);
        while($st->fetch()){
            echo "<section class='row'>";
            echo "<div class='column reflexion'>";
            echo "<p style='color:$color;font-size:$tam"."pt;font-family:$tipo'>$texto</p>";
            echo "<p class='centro'><a href='borrar.php?id=$id_reflexion'>Borrar</a></p>";
            echo "</div>";
            echo "</section>";
        }

    }
    catch (mysqli_sql_exception $e){
        $error=getMensajeError($e->getCode());
    }
    ?>
</main>
</body>
</html>