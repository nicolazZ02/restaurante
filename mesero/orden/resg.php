<?php
    require("../../conexion/conexion.php");
try {
      $sql="SELECT * FROM rol WHERE id_rol = 4";
      $resultado=$bd->prepare($sql);
      $resultado->execute(array());


      if ($iniciar=$resultado->fetch(PDO::FETCH_ASSOC)) {
        ?>


    <form method="get" action="registrar.php">
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
          
        </form>

        <?php
       }
    } catch (Exception $th) {
      die("Error: ". $th->GetMessage());
    }finally{
      $bd=null;
    }


?>