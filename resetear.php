<?php
session_start();
    require_once("conexion/conexion.php");

    $email = $_GET['correo'];

    $sql= "SELECT * FROM usuarios where email = :id"; 
    $resultado=$bd->prepare($sql);
    $resultado->execute(array(":id"=>$email));
    $regi=$resultado->fetch(PDO::FETCH_ASSOC);

    // Varios destinatarios
    $para  =$regi['email']; // atención a la coma
    //$para .= 'wez@example.com';

    // título
    $título = 'Restablecer contraseña de acceso.';
    $codigo = rand(1000,9999);


    $_SESSION['cod']=$codigo;


    // mensaje
    $mensaje = '
<html>
<head>

  <title>Restablecer</title>
</head>
<body>
    <h1>Fast Order</h1>
    <div style="text-align:center; background-color:#B7CBDA">
        <p>Restablecer clave</p>
        <p>Ingrese el siguiente codigo</p>
        <h3>'.$codigo.'</h3>
        <p> <small>Si usted no envio este código favor de omitir.</small> </p>
    </div>
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$enviado = false;
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado = true;
}

?>