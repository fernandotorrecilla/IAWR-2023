<?php
if(isset($_GET["pelicula1"]) &&
    isset($_GET["pelicula2"]) &&
    isset($_GET["pelicula3"])){
    $pelicula1=$_GET["pelicula1"];
    $pelicula2=$_GET["pelicula2"];
    $pelicula3=$_GET["pelicula3"];
    if(is_numeric($pelicula1) &&
        is_numeric($pelicula2) &&
        is_numeric($pelicula3)){
        if($pelicula1>=1 && $pelicula1<=10 &&
            $pelicula2>=1 && $pelicula2<=10 &&
            $pelicula3>=1 && $pelicula3<=10){

            setcookie("pelicula1",$pelicula1,time()+60*60*24*7);
            setcookie("pelicula2",$pelicula2,time()+60*60*24*7);
            setcookie("pelicula3",$pelicula3,time()+60*60*24*7);

        }
        else{
            setcookie("pelicula1",false,time()-1);
            setcookie("pelicula2",false,time()-1);
            setcookie("pelicula3",false,time()-1);
            setcookie("error","El rango tiene que ser de 1 a 10");
        }

    }
    else{
        setcookie("pelicula1",false,time()-1);
        setcookie("pelicula2",false,time()-1);
        setcookie("pelicula3",false,time()-1);
        setcookie("error","Los datos tienen que ser numéricos");
    }
}

header("Location:index.php");


?>