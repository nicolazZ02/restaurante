<?php
    require("conexion/conexion.php");

    $cedu1=$_GET['cedu'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El buen sabor</title>
</head>
<body>
    <form action="nueva_clave.php" method="get">
        <input type="password" name="psw1" placeholder="Ingrese nueva contraseña">
        <input type="password" name="psw2" placeholder="Confirme contraseña">
        <input type="hidden" name="cedu" value="<?php echo $cedu1?>">
        <input type="submit" name="btn" value="Cambiar">
    </form>
</body>
</html>