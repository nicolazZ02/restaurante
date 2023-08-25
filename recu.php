<?php
  require_once("conexion/conexion.php");
  
  if (isset($_GET["correo"])) 
  {
      $email = $_GET['correo'];
      $cedu = $_GET['cedu'];

      $sql= "SELECT * FROM usuarios where email = :id"; 
      $resultado=$bd->prepare($sql);
      $resultado->execute(array(":id"=>$email));
      $regi=$resultado->fetch(PDO::FETCH_ASSOC);

      if(!$regi){
          echo "<script>alert ('No es un correo válido')</script>";
          echo "<script>window.location='contraseña.php'</script>";

      }else{
          $usu = $regi['id_usu'];
          $bytes = random_bytes(5);
          $token =bin2hex($bytes);
          
          include "resetear.php";

          if($enviado){
              $sql="INSERT INTO passwords (id_usu, email, tiken, codigo) values (:idu, :em, :tok, :cod)";
              $resultado=$bd->prepare($sql);
              $resultado->execute(array(":idu"=>$usu, ":em"=>$email, ":tok"=>$token, ":cod"=>$codigo));

              echo "<script>alert ('Le llegara un codigo de verificacion.')</script>";
              echo "<script>window.location='vericodi.php?cedu=$cedu'</script>";
          }

      }
  }

?>