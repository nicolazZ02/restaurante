
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El buen sabor</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    <h3>PEDIDO</h3>
        <label id="id">Cedula cliente</label>
        <input type="number" id="ced" name="id">
        <input type="submit" id="bot" name="button" value="crear pedido">

        <?php
        session_start();
        require("../../conexion/conexion.php");
        
        $id=$_SESSION['id']; 
        $nombre=$_SESSION['nombre'];
        $apellido=$_SESSION['apellido'];

            if (isset($_GET['button'])) {
                
                $id = $_GET['id'];
                $select= "SELECT * FROM usuarios WHERE id_usu=:id";
                $result= $bd ->prepare($select);
                $result->execute(array(":id"=>$id));
                    if ($buscar=$result->fetch(PDO::FETCH_ASSOC)) {
                        $ced = $_GET['id'];
                        $nombre_cliente = $buscar['nom_usu'];
                        $apellido_cliente = $buscar['ape_usu'];
                        $telefono = $buscar['tel_usu'];
                        $email = $buscar['email'];
                        
                        $id=$_SESSION['id']; 
                        $nombre=$_SESSION['nombre'];
                        $apellido=$_SESSION['apellido'];

                        ?>

                        </form>
                        <form method="get">
                        <label>Nombre cliente:</label>
                        <input type="text" name="nombre" readonly value="<?php echo $nombre_cliente?>">
                        <label>Apellido cliente:</label>
                        <input type="text" name="apellido" readonly value="<?php echo $apellido_cliente?>">
                        <label>Cedula cliente:</label>
                        <input type="text" readonly value="<?php echo $ced?>">
                        <label>Mesero:</label>
                        <input type="text" readonly value="<?php echo $nombre?> <?php echo $apellido?>">

                        <?php
                    } else {
                        header("Location: no_exist.php");
                    }
                }
                    ?>
                    <br>
                    <a href="detalle_temp.php?id=<?php echo $ced?> &nomb=<?php echo $nombre_cliente?> &apel=<?php echo $apellido_cliente?> &nmesero=<?php echo $nombre?> &amesero=<?php echo $apellido?> &cedme=<?php echo $id?>"><button type="button" name="pedido">Crear pedido</button></a>

                        </form>


                        <?php


?>
 





    <script>
        var ced = document.getElementById('ced');
        var btn = document.getElementById('bot');

        btn.addEventListener("click",function (evt) {
            if (ced.value === '') {
                alert("Esta vacio llenelo!");
                evt.preventDefault();
                return false;
            }
            else if(ced.value.length >= 11){
                alert("Cedula invalida");
                evt.preventDefault();
                return false;
            }
        }) 
    </script>
</body>
</html>