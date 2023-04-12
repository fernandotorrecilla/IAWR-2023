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
//error_reporting(E_ERROR);
$driver=new mysqli_driver();
$driver->report_mode=MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
try {
    $con=new mysqli("localhost","palabras",
        "asdgjadshjasd&asd54asd","palabrass");
    echo "<p>Conexión correcta</p>";
    $con->close();
}
catch(mysqli_sql_exception $e){
    $error=$e->getCode();
}
?>
</body>
</html>