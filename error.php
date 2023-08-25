<?php
    require("conexion/conexion.php");

    try {
      $sql="SELECT * FROM rol WHERE id_rol = 4";
      $resultado=$bd->prepare($sql);
      $resultado->execute(array());


      if ($iniciar=$resultado->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
  $('#goRight').on('click', function(){
    $('#slideBox').animate({
      'marginLeft' : '0'
    });
    $('.topLayer').animate({
      'marginLeft' : '100%'
    });
  });
  $('#goLeft').on('click', function(){
    $('#slideBox').animate({
      'marginLeft' : '50%'
    });
    $('.topLayer').animate({
      'marginLeft': '0'
    });
  });
});
    </script>
    <link rel="stylesheet" href="../css/iniciar.css">
    <title>El buen sabor</title>
</head>
<body onload="form.id.focus()">

  <div id="back">
  <div class="backRight"></div>
  <div class="backLeft"></div>
</div>

<div id="slideBox">
  <div class="topLayer">
    <div class="left">
      <div class="content">
        <h2>Registrarse</h2>
        <form method="get" action="registrarse.php">
          <div class="form-group">
            <input class="inps" type="text" id="id" name="id"  placeholder="Cedula" required />
            <input class="inps" type="text" name="nombre" placeholder="Nombre" required/>
            <input class="inps" type="text" name="apellido" placeholder="Apellido" required/>
            <input type="hidden" name="tipo" value="<?php echo($iniciar['id_rol'])?>">

            <input class="inps" type="int" name="telefono" placeholder="Celular" required/>
            <input class="inps" type="text" name="email" placeholder="Correo" required/>
            <input class="inps" type="password" id="clave" name="clave" placeholder="Contraseña" required />
          </div>
          <div class="form-group"></div>
          <div class="form-group"></div>
          <div class="form-group"></div>
          <button name="btn" type="submit">Registrarse</button>
            <button id="goLeft"  name="btn"class="off">Iniciar sesion</button>
          
        </form>
      </div>
    </div>
    <div class="right">
      <div class="content1">
        <h2>Inicio Sesion</h2>
        <h2 id="error">Error de sesion</h2>
        <form action="inicio.php" name="form" method="get" >
          <div class="form-group">
            <input type="text" class="inps"  name="id" id="id" placeholder="Correo electronico"  required/>
            <input type="password" class="inps"  name="clave" placeholder="Contraseña" required/>
          </div>
          <button id="login" name="btn" type="submit">Iniciar sesion</button>
          <button id="goRight" class="off">Registrarse</button>
          <div>
            <a href="../contraseña.php">¿Olvido su contraseña?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    
 
</div>

    <script>
        var btn =document.getElementById('login');
        var id= document.getElementById('id');

        btn.addEventListener('click', function(evt) {
             if(id.value.length >= 11){
                alert("Se excedio del numero valido(10)")
                evt.preventDefault();
                return false;
            }
        })
    </script>
</body>
</html>

<?php
       }
    } catch (Exception $th) {
      die("Error: ". $th->GetMessage());
    }finally{
      $bd=null;
    }


?>

