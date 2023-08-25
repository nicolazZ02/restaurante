<?php
    require("../../../conexion/conexion.php");
    if(isset($_GET["submit"])){

        
        $codigo=   $_GET["cod"];
        $producto=   $_GET["nom"];
        $categoria= $_GET['categorias'];
        
		
        

        $sql1= "SELECT * FROM tipo_comida WHERE id_comida = :cod";
        $resultado1= $bd->prepare($sql1);
        $resultado1->execute(array(":cod"=>$codigo));
        $consulta=$resultado1->fetch(PDO::FETCH_ASSOC);

        if($consulta['id_comida'] == $codigo){
            echo"<script>alert('Ya existe esta Bebida.')</script>";
            echo"<script>window.location='panelBebidas.php'</script>";
        }else if($codigo>50){
            $sql="INSERT INTO tipo_comida (id_comida,id_cate,comida) values (:id,:ca,:tip)";
            $resultado=$bd->prepare($sql);//$base es el nombre de la conexión
            $resultado->execute(array(":id"=>$codigo,":ca"=>$categoria,":tip"=>$producto));
            echo"<script>alert('Se agrego correctamente')</script>";
            echo"<script>window.location='panelBebidas.php'</script>";
        }else{
            echo"<script>alert('No es posible crear esta bebida.Recuerda que el rango es de 200 a 300.')</script>";
            echo"<script>window.location='panelBebidas.php'</script>";
        }
        
    }

?>
