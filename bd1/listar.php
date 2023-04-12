<?php
include_once "conexion.php";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
try{
    $con=getConexion();
    echo "<p>Conexión correcta</p>";
    $sql="SELECT id_palabra,palabra FROM palabras";
    $st=$con->prepare($sql);
    //si hubiera interrogaciones: $st->bind_param....
    $st->execute();
    $st->bind_result($id_palabra,$palabra);
    while($st->fetch()){
        echo "<p>Palabra nº: $id_palabra, $palabra";
    }
    $st->close();
    $con->close();
}
catch (mysqli_sql_exception $e){
    $error=mensajeError($e->getCode());
    echo "<p>Error: $error</p>";
}
?>
</body>
</html>
