<?php
   session_start();
   include_once("../../conexion/conexion.php");

 
    $sentencia1="SELECT * FROM usuarios,rol WHERE usuarios.id_rol=rol.id_rol";
    $resultado=$bd ->prepare($sentencia1);
    $resultado->execute();

    $registros=3;//indica que se van a ver 3 registro por págin
    
    $total=$resultado->rowCount();
   // echo $total;
   $paginas=$total/4;
   $paginas=ceil($paginas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El buen Sabor</title>
    <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="../../css/panelU.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
<?php
                    if (!$_GET){
                        header("Location:panelU.php?pagina=1");
                    }
                    if ($_GET['pagina']>$paginas|| $_GET['pagina']<=0) {
                        header("Location:panelU.php?pagina=1");
                    }

                    $iniciar=($_GET['pagina']-1)*$registros;
                    //echo $iniciar;

                    $sentencia2="SELECT * FROM usuarios,rol WHERE usuarios.id_rol=rol.id_rol LIMIT :iniciar,:nregistros";
                    $fell=$bd->prepare($sentencia2);
                    $fell->bindParam(":iniciar",$iniciar,PDO::PARAM_INT);
                    $fell->bindParam(":nregistros",$registros,PDO::PARAM_INT);
                    $fell->execute();

                    $camb=$fell->fetchAll();
                    ?>


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
			<a href="panelU.php">Usuarios</a>
			<a href="../clientes/panelC.php">Clientes</a>
			<a href="menu/index.php">Menu</a>
			<a href="../registros/index.php">Registros</a>
			<a href="#">Instagram</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

    <main>
        <div id="nim">
           <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Registrar
            </button>

            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de usuarios</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="crear.php" method="get">
                                <label for="cedula">Cedula:</label>
                        <input type="text" id="ced" name="id" placeholder="Ingrese cedula" required>
                        <label for="tipo">Tipo usuario:</label>
                    <select id="tip" name="tip" scope="col">
                        <option>Seleccione...</option>
                            <?php
		                        $sql= "SELECT * FROM rol"; 
		                        $result=$bd->prepare($sql);
		                        $result->execute(array());
		                        while($registro=$result->fetch(PDO::FETCH_ASSOC)){
		                            ?> 
                                    <option value="<?php echo($registro['id_rol'])?>"> <?php echo($registro['tip_rol'])?>
                                <?php 
                                }
                                ?>
                    </select>
                    <label for="nombre">Nombre usuario:</label>
                    <input type="text" id="nombre" name="nomb" placeholder="Ingrese nombre" required>
                    <label for="apellido">Apellido usuario:</label>
                    <input type="teñxt" id="apellido" name="apel" placeholder="Ingrese apellido" required>
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="contraseña" name="clave" placeholder="Ingrese contraseña" required>
                    <label for="celular">Celular:</label>
                    <input type="text" id="telefono" name="tel" placeholder="Ingrese celular" required>
                    <label for="correo">Correo electronico:</label>
                    <input type="text" id="correo" name="email" placeholder="Ingrese correo" required>
                    
                  
    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" name="mod" class="btn btn-primary">Crear usuario</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        <div class="input_search">
        <input class="buscar"  type="search" name="busca"  id="" placeholder="Buscar"> 
        <i class="bi bi-search" id="search" title="Buscar"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                <table  class="table  table-hover table-striped table-light table-bordered table-sm  caption-top">
                    <caption>Lista de usuarios registrados</caption>
        <tr >
            <th>Cedula <i class="bi bi-chevron-down"></i></th>
            <th>Nombre <i class="bi bi-chevron-down"></i></th>
            <th>Apellido <i class="bi bi-chevron-down"></i></th>
            <th>Telefono <i class="bi bi-chevron-down"></i></th>
            <th>Correo <i class="bi bi-chevron-down"></i></th>
            <th>Rol <i class="bi bi-chevron-down"></i></th>
            <th colspan="3">Accion <i class="bi bi-chevron-down"></i></th>
        </tr>
        <?php
            foreach ($camb as $move) {
        ?>
        <tr>
            <td><?php echo $move->id_usu?></td>
            <td><?php echo $move->nom_usu?></td>
            <td><?php echo $move->ape_usu?></td>
            <td><?php echo $move->tel_usu?></td>
            <td><?php echo $move->email?></td>
            <td><?php echo $move->tip_rol?></td>
            <td>
                    <a onclick="return confirm('¿Esta seguro de eliminar el usuario?')" href="eliminar.php?id=<?php echo $move->id_usu?> &nomb=<?php echo $move->nom_usu?> &apel=<?php echo $move->ape_usu?> &tel=<?php echo $move->tel_usu?> "><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn">
                        Eliminar
                    </button></a>
                            
                    <a href="modificar.php?id=<?php echo $move->id_usu?> &nomb=<?php echo $move->nom_usu?> &apel=<?php echo $move->ape_usu?> &tel=<?php echo $move->tel_usu?> &ema=<?php echo $move->email?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn">
                        Modificar
                    </button></a>
                    
            </td>
            </tr>
          
        <?php
        }
        ?>
            </table>
                </div>
            </div>
        </div>
        
  
    </main>

    
<script type="text/javascript">




    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "recib_Delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="index.php";
                  $('#respuesta').html(data);
                }
            });
    return false;

    });

</script>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php  echo $_GET['pagina']<=1? 'disabled' : '' ?> ">
        <a class="page-link" href="panelU.php?pagina=<?php echo $_GET['pagina']-1 ?>">Anterior</a>
    </li>
    <?php
        for($i=0; $i<$paginas; $i++):?>
            <li class="page-item <?php echo $_GET ['pagina']==$i+1? 'active': ''?>">
                <a class="page-link" 
                href="panelU.php?pagina=<?php echo $i+1?>">
                <?php echo $i+1?></a>
            </li>
            <?php endfor?>


    <li class="page-item <?php  echo $_GET['pagina']>=$paginas? 'disabled' : '' ?> "><a class="page-link" href="panelU.php?pagina=<?php echo $_GET['pagina']+1 ?>">Next</a></li>
  </ul>
</nav>
</body>
</html>