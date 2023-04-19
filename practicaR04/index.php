<?php
include_once "conexion.php";
$mensajeError="";
if(isset($_COOKIE["error"])){
    $mensajeError=getMensajeError($_COOKIE["error"]);
    setcookie("error",false,time()-1);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta na
          me="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="css/estilos.css?v=4">
</head>
<body>
<h1>Lista de tareas</h1>
<main>
<form action="grabar.php" method="GET">
    <input type="text" id="tarea" name="tarea" placeholder="Nueva tarea">
    <button id="mas" class="anadir">+</button>
</form>
<section>
    <ul id="lista">
        <?php
        try{
            $con=getConexion();
            $sql="SELECT id_tarea,titulo,marcada FROM tareas";
            $st=$con->prepare($sql);
            $st->execute();
            $st->bind_result($id_tarea,$titulo,$marcada);
            while($st->fetch()){
                echo "<li>";
                if($marcada==0){
                    echo "$titulo ";
                    echo "<a class='marcar' href='marcar.php?id_tarea=$id_tarea'>Marcar</a> ";
                }
                else{
                    echo "<span class='marcada'>$titulo</span> ";
                    echo "<a class='desmarcar' href='desmarcar.php?id_tarea=$id_tarea'>desmarcar</a> ";
                }
                echo "<a href='borrar.php?id_tarea=$id_tarea'>Borrar</a></li>";
            }

        }
        catch (mysqli_sql_exception $e){
            $error=$e->getCode();
            $mensajeError=getMensajeError($error);
        }
        ?>
    </ul>
</section>
<section id="errores">
    <?php
    if($mensajeError){
        echo "<p>Error: $mensajeError</p>";
    }
    ?>
</section>
</main>
</body>
</html>