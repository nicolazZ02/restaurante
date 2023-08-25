<?php
session_start();
require("conexion/conexion.php");
    $sentencia=$bd->query("SELECT * FROM usuarios");
    $consult=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_GET['btn'])){

        $cedu=$_GET['cedu'];
        $psw1 = $_GET['psw1'];
        $psw2= $_GET['psw2'];
        $pass_cifrado=password_hash($psw2,PASSWORD_DEFAULT,array("psw2"=>12));
    
        try{
            $sql="UPDATE usuarios SET contraseña=:cla WHERE id_usu=:ce";
            $result=$bd->prepare($sql);
            $result->execute(array(":ce"=>$cedu,":cla"=>$pass_cifrado));
            echo"<script>alert('se actualizo la clave correctamente')</script>";
            echo"<script>window.location='iniciar.php'</script>";
    
        }catch (Exception $th) {
            echo"No se pudo actualizar";
        }
        finally{
            $bd=null;
        }
    }


?>

