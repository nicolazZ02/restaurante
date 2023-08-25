<?php
    session_start();
    include("../../../conexion/conexion.php");

    $consulta="SELECT * FROM tipo_comida  WHERE id_comida>300 AND id_comida<=400";
    $res=$bd ->prepare($consulta);
    $res->execute();
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
    <form method="post" >
        <div id="nim">
            <a href="registrarJ.php">
                <button  type="button">
                    Registrar
                </button>
            </a>
        </div>
        <div class="input_search">
            <input class="buscar"  type="search" name="busca"  id="" placeholder="Buscar"> 
            <i class="bi bi-search" id="search" title="Buscar"></i>
        </div>
    <div class="container">
            <div class="row">
                <div class="col">
                <table  class="table  table-hover table-striped table-light table-bordered table-sm  caption-top">
                    <caption>Panel de comidas</caption>
        <tr >
            <th>Cod.de Comidas<i class="bi bi-chevron-down"></i></th>
            <th>Nombre de comida <i class="bi bi-chevron-down"></i></th>
            
            <th colspan="3">Accion <i class="bi bi-chevron-down"></i></th>
        </tr>
        <?php
            foreach ($res as $mostrar) {
        ?>
        
        <tr>
            <td><?php echo $mostrar->id_comida;?></td>
            <td><?php echo $mostrar->tipo_comida?></td>
            
            <td>
                    <a  id="elimina" href="eliminar.php?id=<?php echo $mostrar->id_comida?>">
                        <i class="bi bi-trash3-fill" title="Borrar"></i>
                    </a>
                </td>
                <td>
                    <a  id="modificar" href="editar.php?id=<?php echo $mostrar->id_comida?>">
                        <i class="bi bi-pencil-square" title="editar"></i>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
                </div>
            </div>
        </div>
        
    <table>
		<td>
			<a href="../index.php" onmouseup="window.close()">
                <input  class="btn btn-primary" id="bot" type="button" value="cerrar" name="cerrar" >
            </a>
		</td>
	</table>
    </form>      
    </main>
    <script src="../../../js/script.js"></script>
</body>
</html>