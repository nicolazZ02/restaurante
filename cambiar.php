<?php
    require("conexion/conexion.php");

    $sql = "SELECT MAX(id_pass) as last_id FROM passwords";
    $resultado=$bd->prepare($sql);
    $resultado->execute(array());
    $registro=$resultado->fetch(PDO::FETCH_ASSOC);
    $numventa=$registro['last_id'];
    $codi= $registro['codigo'];


    if ($_GET['codi']==$codi) {

        ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <form action="password.php" method="get">
                <input type="password" placeholder="Ingrese la nueva contraseña">
                <input type="password" placeholder="Confirme contraseña">
                <input type="submit" name="" id="" value="Cambiar clave">
            </form>    
        </body>
    </html>

<?php
    }else{
        echo "error";
    }
?>

