<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>El buen sabor</title>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel="stylesheet" href="css/index.css">
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>
<body>

<nav class="flex-nav">
  <div class="container">
    <div class="grid menu">
      <div class="column-xs-8 column-md-6">
        <p id="highlight">El buen sabor</p>
      </div>
      <div class="column-xs-4 column-md-6">
        <a href="#" class="toggle-nav">Menu <i class="ion-navicon-round"></i></a>
        <ul>
          <li class="nav-item"><a href="iniciar.php">Iniciar sesion</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<main>
  <div class="container">
    <div class="grid second-nav">
      <div class="column-xs-12">
      </div>
    </div>
    <div class="grid product">
      <div class="column-xs-12 column-md-7">
        <div class="product-gallery">
          <div class="product-image">
            <img class="active" src="https://i1.wp.com/noticieros.televisa.com/wp-content/uploads/2018/12/comida-restaurante-2.jpg?resize=865%2C559&ssl=1">
          </div>
          <ul class="image-list">
            <li class="image-item"><img src="https://static2.mujerhoy.com/www/multimedia/202111/05/media/cortadas/plato-rabo-toro-kbCD--1349x900@MujerHoy.jpg"></li>
            <li class="image-item"><img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/49/a0/94/nuestras-ricas-y-deliciosas.jpg"></li>
            <li class="image-item"><img src="https://i0.wp.com/www.diegocoquillat.com/wp-content/uploads/2017/07/Cocteles.jpg"></li>
          </ul>
        </div>
      </div>
      <div class="column-xs-12 column-md-5">
        <h1>Lo mejor en comidas y bebidas</h1>
        <h2>Precios buenos</h2>
        <div class="description">
          <p>Disfruta de los mejores comidas y bebidas de la ciudad de Ibague</p>
        </div>
        <form action="pedido/pedido.php">
        <button type="submit" class="add-to-cart">Crear pedido</button>
        </form>
        
      </div>
    </div>
    <div class="grid related-products">
      <div class="column-xs-12">
        <h3>Productos en promocion</h3>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://www.wfla.com/wp-content/uploads/sites/71/2017/02/alcohol-1342824_960_720_35300119_ver1.0.jpg?w=1280">
        <h4>Ron</h4>
        <p class="price">$60.000.00</p>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://www.jabefitness.com/wp-content/uploads/2014/01/DSC04477-Medium.jpg">
        <h4>Food decoration</h4>
        <p class="price">$35.000.00</p>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://i0.wp.com/goula.lat/wp-content/uploads/2019/12/hamburguesa-beyond-meat-scaled-e1577396155298.jpg?fit=1600%2C1068&ssl=1">
        <h4>Hamburguesa especial</h4>
        <p class="price">$15.000.00</p>
      </div>
    </div>
  </div>
</main>

<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Compañia</h4>
  	 			<ul>
  	 				<li><a href="#">Sobre nosotros</a></li>
  	 				<li><a href="#">Nuestros servicios</a></li>
  	 				<li><a href="#">Politicas de privacidad</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Para ayudarte</h4>
  	 			<ul>
  	 				<li><a href="#">Comentarios</a></li>
  	 				<li><a href="#">Quejas</a></li>
  	 				<li><a href="#">Valoracion</a></li>
            <li><a href="ubicacion.php">Donde ubicarnos</a></li>
  	 			</ul>
  	 		</div>

  	 		<div class="footer-col">
  	 			<h4 id="h4">Siguenos</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
     <div class="grid">
    <div class="column-xs-12">
      <p class="copyright">&copy; Copyright 2022 <a href="#" title="Coptright 2022"  target="_blank"></a></p>
    </div>
  </div>
  </footer>

  <script>
    const activeImage = document.querySelector(".product-image .active");
const productImages = document.querySelectorAll(".image-list img");
const navItem = document.querySelector('a.toggle-nav');

function changeImage(e) {
  activeImage.src = e.target.src;
}

function toggleNavigation(){
  this.nextElementSibling.classList.toggle('active');
}

productImages.forEach(image => image.addEventListener("click", changeImage));
navItem.addEventListener('click', toggleNavigation);
  </script>
</body>
</html>