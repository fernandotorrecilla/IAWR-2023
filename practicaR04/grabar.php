<?php
include_once "conexion.php";
if(isset($_GET["tarea"]) &&
    strlen(trim($_GET["tarea"]))>0){
    $tarea=htmlspecialchars($_GET["tarea"]);
    $marcada=0;
    try{
        $con=getConexion();
        $sql="INSERT INTO tareas(titulo,marcada) VALUES(?,?)";
        $st=$con->prepare($sql);
        $st->bind_param("si",$tarea,$marcada);
        $st->execute();
        $st->close();
        $con->close();
    }
    catch(mysqli_sql_exception $e){

    }
}
header("Location:index.php");
?>