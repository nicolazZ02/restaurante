<?php
    require("../../conexion/conexion.php");

    if (isset($_GET['mod'])) {
       
        $id = $_GET['id'];

       $nombre = $_GET['nomb'];

       $tipo =$_GET['tipo'];

       $apellido = $_GET['apel'];

       $clave = $_GET['clave'];

       $pass= password_hash($clave,PASSWORD_DEFAULT,array("contraseña"=>12));

       $tel = $_GET['tel'];

       $email = $_GET['email'];


       $insert = "INSERT INTO usuarios(id_usu,id_rol,nom_usu,ape_usu,tel_usu,email,contraseña) values (?,?,?,?,?,?,?)";
       $sentencia = $bd->prepare($insert);
       $sentencia->execute(array($id,$tipo,$nombre,$apellido,$tel,$email,$pass));       

       echo"<script>alert('Se agrego correctamente')</script>";
       echo"<script>window.location='panelC.php'</script>";
    
    }



?>