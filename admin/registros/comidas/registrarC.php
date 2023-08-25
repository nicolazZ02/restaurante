<?php
    require("../../../conexion/conexion.php");
    if(isset($_GET["submit"])){

        
        $codigo=   $_GET["cod"];
        $producto=   $_GET["nom"];
        $categoria = $_GET['categorias'];
        
		
        

        $sql1= "SELECT * FROM tipo_comida WHERE id_comida = :cod";
        $resultado1= $bd->prepare($sql1);
        $resultado1->execute(array(":cod"=>$codigo));
        $consulta=$resultado1->fetch(PDO::FETCH_ASSOC);

        if($consulta['id_comida']==$codigo){
            echo"<script>alert('Ya existe esta Comida.')</script>";
            echo"<script>window.location='panelTcomidas.php'</script>";
        }else if($codigo>70){
            $sql="INSERT INTO tipo_comida (id_comida,id_cate,comida) values (:id, :cate,:tip)";
            $resultado=$bd->prepare($sql);//$bd es el nombre de la conexión
            $resultado->execute(array(":id"=>$codigo,":cate"=>$categoria,":tip"=>$producto));
            echo"<script>alert('Se ha realizado con exito su registro')</script>";
            echo"<script>window.location='panelTcomidas.php'</script>";
        }else{
            echo"<script>alert('No es posible crear esta comida.Recuerda que debes registrar el codigo menor a 100.')</script>";
            echo"<script>window.location='panelTcomidas.php'</script>";
        }
        
    }

?>