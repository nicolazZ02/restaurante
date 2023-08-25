<?php
    require("../../conexion/conexion.php");

    try {

        $sql="SELECT * FROM estado WHERE id_esta = 3";
        $resultado=$bd->prepare($sql);
        $resultado->execute(array());

        if ($menu=$resultado->fetch(PDO::FETCH_ASSOC)) {
            ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Menu</title>
</head>
<body>
    <H1>Menu</H1>

    <div class="datos" id="contenido">
        <div>
            <img src="" alt="">
        </div>
        <div>
            <p><strong>Nº Menu: </strong></p> 
            <p><strong>Estado: </strong></p>
            <p><strong>Comida: </strong></p>
            <p><strong>Precio oferta:</strong></p>
            <p><strong>Precio: </strong></p>
            <p><strong>Tiempo estimado: </strong></p> 
        </div>
        
    </div>
        <div>
            <form action="" method="post" enctype="multipart/form-data" id="formulario">
                <label for="">Numero de menu:</label><br>
                <input type="number" name="docu" id="" placeholder="Numero de Menu">
                <input type="hidden" name="estado" value="<?php echo($menu['id_esta'])?>" id=""><br>
                <label for="">Comida o bebida</label><br>
                <select name="comida" id="">
                    <option>Seleccione...</option>
                    <?php
                        $sql="SELECT * FROM tipo_comida";
                        $result=$bd->prepare($sql);
                        $result->execute(array());

                        while ($menus=$result->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo($menus['id_comida'])?>"><?php echo($menus['tipo_comida'])?></option>
                            <?php
                        }
                    ?>
                </select><br>
                <label for="">Precio oferta</label><br>
                <input type="number" name="oferta" id="" placeholder="Ingrese precio oferta"><br>
                <label for="">Precio</label><br>
                <input type="email" name="precio" id="" placeholder="Ingrese el precio"><br>
                <label for="">Tiempo estimado</label>
                <input type="text" name="time" placeholder="Ingrese el tiempo estimado">
                <label for="">foto</label><br>
                <input type="file" name="foto" id=""><br>
                <button type="submit" id="enviar">Enviar</button>
            </form>
        </div>

    

    <script src="../../js/app.js"></script>
</body>
</html>
<?php
        }

    } catch (Exception $e) {
        die("Error" . $e->GetMessage());
    }finally{
        $bd=null;
    }
?>

