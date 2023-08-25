

<?php
session_start();
include('../../conexion/conexion.php');

$id = $_REQUEST['menu'];
$estado 		 = $_REQUEST['estado'];
$comida    = $_REQUEST['comida'];
$precioofer    = $_REQUEST['precioO'];
$precio	 = $_REQUEST['precio'];
$tiempo = $_REQUEST['tiempo'];

$update = ("UPDATE menu
	SET 
	id_esta  = :esta,
	id_comida = :comi,
	precio_ofert = :preco,
	precio  = :prec,
    tiempo_estimado = :time

WHERE cod_menu= :id");
$result = $bd->prepare($update);
$result->execute(array(":id"=>$id,":esta"=>$estado, ":comi"=>$comida, ":preco"=>$precioofer,":prec"=>$precio,":time"=>$tiempo));

	echo "<script>alert('Se actualizaron los datos')</script>";
echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>
