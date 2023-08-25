<?php
require("conexion/conexion.php");
    $cedu=$_GET['cedu'];
    $_SESSION['cedu']=$cedu;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vercodi.css">
    <title>Recuperar</title>
</head>
<body onload="form.codi.focus()">
    <div class="codi1">
    <form action="codi.php" method="get">
        <p>Ingrese el codigo que le enviamos a su correo</p>

        <input type="text" id="codi" class="inp" name="codi" placeholder="Ingrese el codigo">
        <input type="hidden" name="cedu" value="<?php echo $cedu?>">
        <input type="submit" value="Confirmar">
    </form>
    </div>
</body>
</html>