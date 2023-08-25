<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>
    
    <link rel="stylesheet" href="../../css/indexcomidas.css">
    
</head>
<body id="body">
    
<header class="header">
		<div class="container-2">
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
			<a href="../menu/index.php">Menu</a>
			<a href="index.php">Registros</a>
			<a href="#">Instagram</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

    <main>
    
<div  role="navigation">
  <div class="container">
    <div class="navbar-header"><h4>Bienvenido Administrador</h4></div>
  </div>
</div>
<div class="container">
  
    <div class="card">
        <div class="col-xs-3">
            <p class="page-header">Comidas</p>
                <img src="../../img/comidas.jpg" class="img-rounded" width="250px" height="250px" />
     <a  href="./comidas/panelTcomidas.php" title="Ver" class="bebida" onclick="return confirm('¿Desea ver los registros de todas las comidas?')"><button>Ver registros</button></a> 
        </div> 
    </div>
    <div class="card">
        <div class="col-xs-3">
            <p class="page-header">Sopas</p>
                <img src="../../img/sopas.jpg" class="img-rounded" width="250px" height="250px" />
                <a  href="./sopas/panelSopas.php" class="bebida" title="Ver" onclick="return confirm('¿Desea ver los registros de todas las sopas?')"><button>Ver registros</button></a> 
        </div> 
    </div>
    <div class="card">
        <div class="col-xs-3">
            <p class="page-header">Bebidas</p>
                <img src="../../img/bebidas.jpg" class="img-rounded" width="250px" height="250px" />
                <a  href="./bebidas/panelBebidas.php"  class="bebida"  title="Ver" onclick="return confirm('¿Desea ver los registros de todas las bebidas?')"><button>Ver registros</button></a> 
        </div> 
    </div>
    <div class="card">
        <div class="col-xs-3">
            <p class="page-header">Jugos</p>
                <img src="../../img/jugos.jpg" class="img-rounded" width="250px" height="250px" />
                <a  href="./jugos/PanelJugos.php" class="bebida" title="Ver" onclick="return confirmacion('¿Desea ver los registros de todas los jugos?')"><button>Ver registros</button></a> 
        </div> 
    </div>
    
</div>
    </main>
    <script src="../../js/script.js"></script>
    <script src="./js/function.js"></script>
</body>
</html>