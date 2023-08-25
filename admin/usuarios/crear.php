<?php
    require("../../conexion/conexion.php");

    if (isset($_GET['mod'])) {
       
        $id = $_GET['id'];

       $tipo = $_GET['tip'];

       $nombre = $_GET['nomb'];

       $apellido = $_GET['apel'];

       $clave = $_GET['clave'];

       $pass= password_hash($clave,PASSWORD_DEFAULT,array("contraseña"=>12));

       $tel = $_GET['tel'];

       $email = $_GET['email'];


       $insert = "INSERT INTO usuarios(id_usu,id_rol,nom_usu,ape_usu,tel_usu,email,contraseña) values (?,?,?,?,?,?,?)";
       $sentencia = $bd->prepare($insert);
       $sentencia->execute(array($id,$tipo,$nombre,$apellido,$tel,$email,$pass));

       echo"<script>alert('Se registro correctamente')</script>";
       echo"<script>window.location='panelU.php'</script>";
    
    }

?>