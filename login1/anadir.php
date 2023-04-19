<?php
include_once "conexion.php";
if(isset($_GET["nombre"]) && isset($_GET["password"]) ){
    $nombre=$_GET["nombre"];
    $password=$_GET["password"];
    try{
        $con=getConexion();
        $sql="INSERT INTO usuarios(nombre,password)".
            " VALUES(?,?)";
        $st=$con->prepare($sql);
        $st->bind_param("ss",$nombre,$password);
        $st->execute();
        $st->close();
        $con->close();
        setcookie("correcto","si");
    }
    catch (mysqli_sql_exception $e){
        setcookie("error",$e->getCode());
    }
}
header("Location:index.php");


?>