<?php
session_start();
if (isset($_SESSION["usuario"])) {
    $id_usuario = $_SESSION["usuario"];
}
else {
    header("Location:index.php");
}
if(isset($_GET["id_tarea"])){
    $id=$_GET["id_tarea"];
    $driver=new mysqli_driver();
    $driver->report_mode=MYSQLI_REPORT_OFF;
    $mysqli=new mysqli("localhost","tareas2","tareas2","tareas2");
    if($mysqli->connect_errno==false) {
        $mysqli->query("DELETE FROM tareas WHERE id_tarea=$id");
        $mysqli->close();
    }
}
header("Location:tareas.php");

?>