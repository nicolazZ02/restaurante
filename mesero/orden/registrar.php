<?php
    require("../../conexion/conexion.php");

    if (isset($_GET['btn'])) {
       
        $id = $_GET['id'];

       $nombre = $_GET['nombre'];

       $tipo =$_GET['tipo'];

       $apellido = $_GET['apellido'];

       $clave = $_GET['clave'];

       $pass= password_hash($clave,PASSWORD_DEFAULT,array("contraseña"=>12));

       $tel = $_GET['telefono'];

       $email = $_GET['email'];


       $insert = "INSERT INTO usuarios(id_usu,id_rol,nom_usu,ape_usu,tel_usu,email,contraseña) values (?,?,?,?,?,?,?)";
       $sentencia = $bd->prepare($insert);
       $sentencia->execute(array($id,$tipo,$nombre,$apellido,$tel,$email,$pass));       

       echo"<script>alert('El registro fue exitoso')</script>";
       echo"<script>window.location='crearo.php'</script>";
    
    }



?>