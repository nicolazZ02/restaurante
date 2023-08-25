<?php
session_start();
    require("conexion/conexion.php");

    $veri= $_GET['codi'];
    $cedu = $_GET['cedu'];

    $codigo=$_SESSION['cod'];

    if ($codigo==$veri) {
        header("Location: cambiarC.php?cedu=$cedu");
    }else {
        echo"Error";
    }
?>