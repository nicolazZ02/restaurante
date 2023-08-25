<?php
    require("../../../conexion/conexion.php");
    if(isset($_GET["submit"])){

        
        $codigo=   $_GET["cod"];
        $producto=   $_GET["nom"];
        $cate = $_GET['categorias'];
        
		
        

        $sql1= "SELECT * FROM tipo_comida WHERE id_comida = :cod";
        $resultado1= $bd->prepare($sql1);
        $resultado1->execute(array(":cod"=>$codigo));
        $consulta=$resultado1->fetch(PDO::FETCH_ASSOC);

        if($consulta['id_comida'] == $codigo){
            echo"<script>alert('Ya existe esta Bebida.')</script>";
            echo"<script>window.location='panelSopas.php'</script>";
        }elseif($codigo>1 AND $codigo<50){
            $sql="INSERT INTO tipo_comida (id_comida,id_cate,comida) values (:id, :cate,:tip)";
            $resultado=$bd->prepare($sql);//$base es el nombre de la conexión
            $resultado->execute(array(":id"=>$codigo,":cate"=>$cate,":tip"=>$producto));
            echo"<script>alert('Se ha realizado')</script>";
            echo"<script>window.location='panelSopas.php'</script>";
        }else{
            echo"<script>alert('No es posible crear esta bebida.Recuerda que el rango es de 200 a 300.')</script>";
            echo"<script>window.location='panelSopas.php'</script>";
        }
        
    }

?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../css/panelU.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
            
        </div>
        <div class="restaurante">
            <img src="../../../img/Buensabor.png">
        </div>
        <div class="botones">
                
                <a href="#"><button>Cerrar</button>
        </div>
       
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
        <i class="fal fa-hat-chef"></i>
            <h4>El Buen Sabor</h4>
        </div>

        <div class="options__menu">	

            <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Contacto</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <h4>Nosotros</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa-light fa-hat-chef"></i>
                    <h4>Nosotros</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
        <div><h1>Registro de Sopas</h1></div>
        <form action="registrarS.php" method="GET" >
            <label for="">Codigo de Sopa:</label><br>
            <input type="number" name="cod" id="" placeholder="Ingrese el codigo de su sopa " required><br>
            <label for="">Nombre de la sopa:</label><br>
            <input type="varchar" name="nom" id="" placeholder="Ingrese el nombre " required><br>
            
            <button type="submit" name="submit" id="enviar">Enviar</button>
            <a href="./PanelMenu.php"><button >Regresar</button></a>
        </form> 
    </main>
    <script src="../../../js/script.js"></script>
</body>