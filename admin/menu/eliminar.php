<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eliminar</title>
</head>
<body>
<?php
require("../../conexion/conexion.php");

$id=                        $_GET["id"];

try{
$sql="DELETE FROM menu WHERE cod_menu=:id";
$resultado=$bd->prepare($sql);  //$base guarda la conexión a la base de datos
$resultado->execute(array(":id"=>$id,));//asigno las variables a los marcadores
echo '<script>alert("se elimino correctamente");</script>';
echo '<script>window.location="index.php"</script>';
$resultado->closeCursor();

}
catch(Exception $e){
	//die("Error: ". $e->GetMessage());
 	echo "No funciono" . $id;
}
finally{
	$bd=null;//vaciar memoria
}
?>
</body>
</html>