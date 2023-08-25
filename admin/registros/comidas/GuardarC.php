<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/editar.css">
    <title>Actualizar</title>
</head>
<body>

<?php
    require("../../../conexion/conexion.php");

    
		$codigo=                           $_POST['cod'];
        $producto=                           $_POST['nom'];
        

	try{
        $sql="UPDATE tipo_comida SET  tipo_comida=:nom WHERE id_comida=:cod";
		$resultado=$bd->prepare($sql);//$base es el nombre de la conexión
		$resultado->execute(array(":cod"=>$codigo,":nom"=>$producto));
        echo"<script>alert('Se actualizo correctamente')</script>";
        echo"<script>window.location='panelTcomidas.php'</script>";
    

        $resultado->closeCursor();
    }catch(Exception $e){
        //die("Error: ". $e->GetMessage());
         echo "Fallo inesperado " . $cedula;
    }finally{
        $bd=null;//vaciar memoria
    }
?>