<?php
include_once "conexion.php";
$letra="A";
$orden="localidad";
$o=1;
if(isset($_GET["letra"])){
    $letra=$_GET["letra"];
}
if(isset($_GET["orden"])){
    if($_GET["orden"]=='2') {
        $orden="provincia,localidad";
        $o=2;
    }
    elseif($_GET["orden"]=='3') {
        $orden="poblacion desc";
        $o=3;
    }
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .marcada{
            background-color: blue;
            color:white;
            text-decoration: none;
        }
    </style>
</head>
<body>

<p>
    <?php
    for($n=65;$n<=90;$n++){
        if(chr($n)==$letra){
           echo "<a class='marcada' href='index.php?letra=".
               chr($n)."&orden=$o'>".chr($n)."</a> ";
        }
        else{
            echo "<a href='index.php?letra=".chr($n)."&orden=$o'>".
                chr($n)."</a> ";
        }

    }
    ?>

</p>

<?php
try{
    $con=getConexion();
    $sql="SELECT l.nombre localidad,poblacion, ".
        "p.nombre provincia ".
        "FROM localidades l ".
        "JOIN provincias p USING(n_provincia) ".
        "WHERE INSTR(l.nombre,?)=1 ".
        "ORDER BY $orden ";
    $st=$con->prepare($sql);
    $st->bind_param("s",$letra);
    $st->execute();
    $st->bind_result($localidad,$poblacion,
        $provincia);
    echo "<table>";
    echo "<tr>";
        if($o=="1")
            echo "<th><a class='marcada' href='index.php?orden=1&letra=$letra'>Localidad</a></th>";
        else
            echo "<th><a href='index.php?orden=1&letra=$letra'>Localidad</a></th>";
        if($o==2)
            echo "<th><a class='marcada' href='index.php?orden=2&letra=$letra'>Provincia</a></th>";
        else
            echo "<th><a href='index.php?orden=2&letra=$letra'>Provincia</a></th>";
        if($o==3)
            echo "<th><a class='marcada' href='index.php?orden=3&letra=$letra'>Poblacion</a></th>";
        else
            echo "<th><a href='index.php?orden=3&letra=$letra'>Poblacion</a></th>";
    echo "</tr>";
    while($st->fetch()){
        echo "<tr>";
            echo "<td>$localidad</td>";
            echo "<td>$provincia</td>";
            echo "<td>$poblacion</td>";
        echo "</tr>";
    }//fin while
    $st->close();
    $con->close();
    echo "</table>";
}
catch(mysqli_sql_exception $e){

}

?>
</body>
</html>