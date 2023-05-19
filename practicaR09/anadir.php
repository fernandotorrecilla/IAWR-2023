<?php
session_start();
include_once "conexion.php";
$error="";
if( isset($_POST["color"]) &&
    isset($_POST["tipo"]) &&
    isset($_POST["tam"]) &&
    isset($_POST["texto"]) ){

    $color=$_POST["color"];
    $tipo=$_POST["tipo"];
    $texto=$_POST["texto"];
    $tam=$_POST["tam"];
    try{
        $con=getConexion();
        $sql="INSERT INTO reflexiones(color,tipo,texto,tam) ".
            "VALUES(?,?,?,?)";
        $st=$con->prepare($sql);
        $st->bind_param("sssi",$color,$tipo,$texto,$tam);
        $st->execute();
        $st->close();
        $con->close();
    }
    catch(mysqli_sql_exception $e){
        //$msg=$e->getMessage();
        $error=getMensajeError($e->getCode());
    }
    if($error==""){
        $_SESSION["correcto"]="si";
        header("Location:nueva.php");
    }
    else{
        //echo $msg;
        echo $tam;
        $_SESSION["error"]=$error;
        header("Location:nueva.php");
    }

}
else{
    header("Location: nueva.php");
}

?>