<?php

require("../../conexion/conexion.php");


    
    $cons = "SELECT * FROM menu,estado,tipo_comida WHERE menu.id_esta=estado.id_esta and menu.id_comida=tipo_comida.id_comida";
    $sql = $bd->prepare($cons);
    $sql->execute(array());



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/menu.css">
    <title>El buen sabor</title>
</head>
<body>

<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Logotipo</h1>
			</div>
			<nav class="menu">
				<a href="../../includes/cerrar.php">Cerrar sesion</a>      
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="../index.php">Inicio</a>
			<a href="../usuarios/panelU.php">Usuarios</a>
			<a href="../clientes/panelC.php">Clientes</a>
			<a href="index.php">Menu</a>
			<a href="../registros/index.php">Registros</a>
			<a href="#">Instagram</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

</header>


    <input type="text">
    <br>
    <br>
    <input type="text">
    <br>

    <div class="box-body"> 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Registrar
            </button>

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crea Menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1>Menu</h1>
      <?php

    try {

        $sql2="SELECT * FROM estado WHERE id_esta = 3";
        $resultado2=$bd->prepare($sql2);
        $resultado2->execute(array());

        if ($menu=$resultado2->fetch(PDO::FETCH_ASSOC)) {
            ?>
        <div>
            <form action="" method="post" enctype="multipart/form-data" id="formulario">
                <label for="">Numero de menu:</label><br>
                <input type="number" name="docu" id="" placeholder="Numero de Menu">
                <input type="hidden" name="estado" value="<?php echo($menu['id_esta'])?>" id=""><br>
                <label for="">Comida o bebida</label><br>
                <select name="comida" id="">
                    <option>Seleccione...</option>
                    <?php
                        $sql1="SELECT * FROM tipo_comida WHERE id_comida <= 100";
                        $result1=$bd->prepare($sql1);
                        $result1->execute(array());

                        while ($menus=$result1->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo($menus['id_comida'])?>"><?php echo($menus['comida'])?></option>
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
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" name="crear" id="enviar" class="btn btn-primary">Crear menu</button>
      </div>
      </form>
      <script src="../../js/app.js"></script>
    </div>
  </div>
</div>


        
        
            <div class="form-group">    
                <table class="table  table-hover table-striped table-light table-bordered table-sm  caption-top"> 
                    <tr>
                        <th>Nº Menu<i class="bi bi-chevron-down"></i></th>
                        <th>Estado<i class="bi bi-chevron-down"></i></th>
                        <th>Comida<i class="bi bi-chevron-down"></i></th>
                        <th>Precio oferta<i class="bi bi-chevron-down"></i></th>
                        <th>Precio<i class="bi bi-chevron-down"></i></th>
                        <th>Tiempo estimado<i class="bi bi-chevron-down"></i></th>
                        <th>Foto<i class="bi bi-chevron-down"></i></th>
                        <th colspan="3">Acción<i class="bi bi-chevron-down"></i></th>
                    </tr>
                    <?php

                            foreach ($sql as $resul) 
                            {
                                $d=$resul->cod_menu;
                                $no=$resul->tipo_estado;
                                $ap=$resul->id_comida;
                                $id=$resul->comida;
                                $ed=$resul->precio_ofert;
                                $te=$resul->precio;
                                $co=$resul->tiempo_estimado;
                                $fo=$resul->foto;
                    ?>
                    <tr>
          				<td><?php echo $d?></td>
          				<td><?php echo $no?></td>
                        <td><?php echo $id?></td>
                        <td><?php echo $ed?></td>
                        <td><?php echo $te?></td>
                        <td><?php echo $co?></td>
                        <td><?php echo (' <img src="../../foto/'.$fo.'" width="100"> ') ?></td>

        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                Modificar
            </button></td>

<!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1">Menu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1>Modifica el menu</h1>
                        <form action="modificar.php" method="POST" id="contact" >

                        <label for="cedula">Codigo menu:</label>
                    <div class="field-container">
                     
                        <input type="text" readonly name="menu" value="<?php echo $d?>">
     
                    </div> 
       
                    <label for="apellido">Comida:</label>  
                    <div class="field-container">

                        <input type="text"  name="" requiered value="<?php echo $id ?>">
                        <input type="hidden" name="comida" value="<?php echo $ap?>">
                   
                    </div>
                    <label for="Rol">Estado:</label>
                   
                    <div class="field-container">
                        <select name="estado">
                        <?php
                            $sq= "SELECT * FROM estado WHERE id_esta >= 3"; 
                            $resultado=$bd->prepare($sq);
                            $resultado->execute(array());
                            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <option value="<?php echo $registro['id_esta'];?>"><?php echo $registro['tipo_estado']?></option>
                        <?php
                        }
                        ?>
                    </select>
                      
                    </div>
                    <label for="telefono">Precio oferta:</label> 
                    <div class="field-container">
                        
                        <input type="number" name="precioO" required value="<?php echo $ed ?>">
                     
                    </div>
                    <label for="correo">Precio:</label> 
                    <div class="field-container">
                   
                        <input type="number" name="precio" required value="<?php echo $te ?>">
                    
                    </div>
                    <label for="correo">Tiempo:</label> 
                    <div class="field-container">
                    
                        <input type="varchar" name="tiempo" required value="<?php echo $co ?>">
                    
                    </div>
                       
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </div>
            </form>
    </div>
  </div>
</div>
                        <td><a class="btn btn-danger"  onclick="return confirm('¿Esta seguro de eliminar este menu?')" href="eliminar.php?id=<?php echo $d?>" class="button green">Eliminar</a></td>
                    </tr>
                    <?php 
                        }
                    ?>
                </table>
            </div>
        </form>
        <?php
        }

    } catch (Exception $e) {
        die("Error" . $e->GetMessage());
    }finally{
        $bd=null;
    }
?>

<script>
    $(document).ready(function() {
    $('#search').keyup(function(event) {
        event.preventDefault();
        let datos = $('#form').serializeArray();
        $.post({
            url: 'actions.php',
            data: datos,
            success: function(response) {
                $('#response').html(response);
            }
        })
    })

});
</script>


</body>
</html>


