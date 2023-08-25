<?php
  session_start();
  require('../conexion/conexion.php');

  $nombre=$_SESSION['nombre'];
  $apellido=$_SESSION['apellido'];
  $tipo=$_SESSION['rol'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Fast Order</title>
  
	<link rel="stylesheet" href="../css/admin.css">
	<style>
		#h1{
			color:#fff;
			font-size:36px;
			margin-left:34rem;
			margin-top:50px;
		}
		.p{
			color:#fff;
			font-size:27px;
			margin-left:37rem;
			margin-top:-10px;
		}

	</style>

</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				 	<img src="../img/LOGO.png" alt="LOGO">
			</div>
			<nav class="menu">
				<a href="../includes/cerrar.php">Cerrar sesion</a>      
			</nav>

		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="index.php">Inicio</a>
			<a href="orden/crearo.php">Crear pedido</a>
			<a href="clientes/panelC.php">Clientes</a>
			<a href="menu/index.php">Menu</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<main>	

        <h1 id="h1">Bienvenido <?php echo $tipo ?></h1><br>

		<p class="p"><?php  echo $nombre?> <?php echo  $apellido?></p>
		<br>
		

        
    </main>
</body>
</html>
