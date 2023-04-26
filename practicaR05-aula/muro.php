<?php
session_start();
include_once "conexion.php";
$error=0;
if(isset($_SESSION["id_usuario"]) &&
    isset($_SESSION["usuario"])){
    $id_usuario=$_SESSION["id_usuario"];
    $usuario=$_SESSION["usuario"];
    if(isset($_SESSION["error"])) {
        $error = $_SESSION["error"];
    }
}
else{
    header("Location:index.php");
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
    <link rel="stylesheet" href="estilos.css?v=2">
</head>
<body>
<h1>Lista de tareas de <?=$usuario?></h1>
<?php
try{
    $con=getConexion();
    $sql="SELECT id_tarea,titulo,marcada,prioridad FROM tareas ".
        "WHERE id_usuario=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id_usuario);
    $st->execute();
    echo "<ul>";
    $st->bind_result($id_tarea,$titulo,$marcada,$prioridad);
    while($st->fetch()){
        echo "<li>";
        $clase="";
        if($prioridad==1) $clase="baja";
        elseif($prioridad==2) $clase="media";
        else $clase="alta";
        if($marcada==1) {
            $clase="$clase marcada";
            echo "<span class='$clase'>$titulo</span>";
            echo " <a href='desmarcar.php?id_tarea=$id_tarea'>Desmarcar</a> ";
        }else{
            echo "<span class='$clase'>$titulo</span>";
            echo " <a href='marcar.php?id_tarea=$id_tarea'>Marcar</a> ";
        }
        echo " <a href='borrar.php?id_tarea=$id_tarea'>Borrar</a></li> ";
    }
    echo "</ul>";
    $st->close();
    $con->close();


}
catch (mysqli_sql_exception $e){

}


?>
<section id="cerrar">
    <a href="cerrar.php">Cerrar Sesión</a>
</section>
<h2>Añadir tarea</h2>
<form action="anadir.php">
    <input type="text" name="tarea" placeholder="Nueva tarea"
        id="tarea" required><br>
    <label for="prioridad">Prioridad</label>
    <select name="prioridad" id="prioridad">
        <option value="1" selected>Baja</option>
        <option value="2">Media</option>
        <option value="3">Alta</option>
    </select><br>
    <button>Añadir</button>
</form>
<section id="error">
    <?php
    if($error!=0){
        echo "<p class='error'>$error</p>";
        unset($_SESSION["error"]);
    }
    ?>
</section>

</body>
</html>
