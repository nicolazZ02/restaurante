<?php

session_start();
require("../../../conexion/conexion.php");
    $modi=     $_GET['id'];

    
    try {
        $sql="SELECT * FROM tipo_comida WHERE id_comida= :co";
        $result=$bd->prepare($sql);
        $result->execute(array(":co" => $modi));    
        
        
        
        if ($editar=$result-> fetch(PDO::FETCH_ASSOC)){
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../../../css/editarC.css">
    <script src="https://kit.fontawesome.com/0046f31256.js" crossorigin="anonymous"></script>
    
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
    <section class="form-contact">
            <header class="form">
                <span>
                        <p>Editar registro</p>
                </span>
            </header>
            <form  action="GuardarC.php" method="POST" id="contact">
                <div class="grup">
                </div>
                <label for="cedula">Codigo del producto:</label>
                    <div class="field-container">
                        <i class="bi bi-person-video2"></i>
                        <input type="text" readonly name="cod" value="<?php echo $editar['id_comida'] ?>">
                        <p></p>
                    </div> 
                    <label for="nombre">Nombre del producto:</label>   
                    <div class="field-container">
                        <i class="bi bi-person-circle"></i>
                        <input type="varchar" name="nom" id="nombre" required value="<?php echo $editar['comida'] ?>">
                        <p></p>
                    </div>
                    
                    <input type="submit" id="bot" name="modi" value="Guardar">
                    <input type="hidden" name="formreg" value="1">
                <p class="warnings" id="warnings"></p>
            </form> 
        </section>
                
    </main>

    <script src="../../../js/script.js"></script>
</body>
</html>
            <?php
        }else{
            echo"No existe";
        }
       


        $result->closeCursor();
        
    }catch(Exception $e) {
        die("Error: ". $e->GetMessage());
    }finally{
        $bd=null;
    }
?>