<?php
include_once "conexion.php";
if(isset($_GET["id_tarea"])){
    $id_tarea=$_GET["id_tarea"];
    try{
        $con=getConexion();
        $sql="DELETE FROM tareas WHERE id_tarea=?";
        $st=$con->prepare($sql);
        $st->bind_param("i",$id_tarea);
        $st->execute();
        $st->close();
        $con->close();
    }
    catch (mysqli_sql_exception $e){
        setcookie("error",$e->getCode());

    }
}
header("Location:index.php");

?>