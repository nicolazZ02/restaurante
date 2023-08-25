<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eliminar</title>
</head>
<body>
<?php
require("../../../conexion/conexion.php");

$id=                        $_GET["id"];

try{
$sql="DELETE FROM tipo_comida WHERE id_comida=:id";
$resultado=$bd->prepare($sql);  //$base guarda la conexión a la base de datos
$resultado->execute(array(":id"=>$id,));//asigno las variables a los marcadores
echo '<script>alert("se elimino correctamente");</script>';
echo '<script>window.location="panelTcomidas.php"</script>';
$resultado->closeCursor();

}
catch(Exception $e){
	//die("Error: ". $e->GetMessage());
 	echo "F" . $id;
}
finally{
	$bd=null;//vaciar memoria
}
?>
</body>
</html>