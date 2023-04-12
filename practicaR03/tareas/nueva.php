<?php
if(isset($_POST["tarea"]) && strlen(trim($_POST["tarea"]))>0){
    $tarea=$_POST["tarea"];
    if(isset($_COOKIE["tareas"])){
        $tareas=json_decode($_COOKIE["tareas"],true);
    }
    else{
        $tareas=array();
    }
    array_push($tareas,$tarea);
    setcookie("tareas",json_encode($tareas),time()+60*60*24*7);
    header("Location:listar.php");
}
else{
    header("Location:listar.php");
}

?>