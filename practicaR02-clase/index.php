<?php
$pelicula1="";
$pelicula2="";
$pelicula3="";
if(isset($_COOKIE["pelicula1"]) &&
isset($_COOKIE["pelicula2"]) &&
isset($_COOKIE["pelicula3"])){
    $pelicula1=$_COOKIE["pelicula1"];
    $pelicula2=$_COOKIE["pelicula2"];
    $pelicula3=$_COOKIE["pelicula3"];
}

$error="";
if(isset($_COOKIE["error"])){
    $error=$_COOKIE["error"];
}
?>
<!doctype html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votación</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <style>
        .error{
            color:red;
            font-weight: bold;
        }
        .fondoRojo{
            background-color: red;
            width:<?=$pelicula1*10?>%
        }
        .fondoVerde{
            background-color: green;
            width:<?=$pelicula2*10?>%
        }
        .fondoAzul{
            background-color: blue;
            width:<?=$pelicula3*10?>%
        }
    </style>
</head>
<body>
<main>
    <h1>Votación de la mejor película</h1>
    <article>
        <form action="proceso.php" method="GET">
            <label for="pelicula1">Todo a la vez en todas partes</label>
            <input type="text" id="pelicula1" name="pelicula1"
            value="<?=$pelicula1?>">
            <label for="pelicula2">Sin novedad en el frente</label>
            <input type="text" id="pelicula2" name="pelicula2"
                   value="<?=$pelicula2?>">
            <label for="pelicula3">Almas en pena de Inisherin</label>
            <input type="text" id="pelicula3" name="pelicula3"
                   value="<?=$pelicula3?>">
            <button type="submit">Votar</button>
        </form>
        <form action="borrar.php">
            <button type="submit" class="secondary">Borrar</button>
        </form>
    </article>
    <article id="resultado">
        <?php
        //if(isset($_COOKIE["error"])){
          //  $error=$_COOKIE["error"];
        if($error){
            setcookie("error",false,time()-1);
            echo "<h1>Error</h1>";
            echo "<p class='error'>$error</p>";
        }
        elseif($pelicula1 && $pelicula2 && $pelicula3) {
            echo "<h1>Resultados</h1>";
            echo "<p>Todo a la vez en todas partes: $pelicula1 votos</p>";
            echo "<p class='fondoRojo'>&nbsp;</p>";
            echo "<p>Sin novedad en el frente: $pelicula2 votos</p>";
            echo "<p  class='fondoVerde'>&nbsp;</p>";
            echo "<p>Almas en pena de Inisherin: $pelicula3 votos</p>";
            echo "<p class='fondoAzul'>&nbsp;</p>";
        }
        ?>
    </article>
</main>
</body>
</html>