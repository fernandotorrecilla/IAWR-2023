<?php
if(isset($_COOKIE["tareas"])){
    $tareas=json_decode($_COOKIE["tareas"],true);
}
else{
    $tareas=array();
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="css/estilos.css?v=4">

</head>
<body>
<h1>Lista de tareas</h1>
<main>
<form action="nueva.php" method="POST">
    <input type="text" id="tarea" name="tarea" placeholder="Nueva tarea">
    <button id="mas" class="anadir">+</button>
</form>
<section>
    <ul id="lista">
        <?php
        foreach($tareas as $id=>$tarea){
            echo "<li>$tarea <a href='borrar.php?id=$id'>Borrar</a></li>";
        }
        ?>
    </ul>
</section>
<section>
    <form action="borrarTodas.php">
        <button class="borrarTodo">Borrar Todas las tareas</button>
    </form>
</section>
</main>
</body>
</html>