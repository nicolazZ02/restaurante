

<?php
include('../../conexion/conexion.php');

$id = $_REQUEST['cc'];
$rol 		 = $_REQUEST['rol'];
$nombre      = $_REQUEST['nom'];
$apellido    = $_REQUEST['apel'];
$telefono    = $_REQUEST['tel'];
$correo 	 = $_REQUEST['correo'];

$update = ("UPDATE usuarios 
	SET 
	id_rol   = :id_rol,
	nom_usu  = :nom,
	ape_usu = :apel,
	tel_usu = :tel,
	email  = :ema

WHERE id_usu= :id
");
$result = $bd->prepare($update);
$result->execute(array(":id"=>$id,":id_rol"=>$rol, ":nom"=>$nombre, ":apel"=>$apellido,":tel"=>$telefono,":ema"=>$correo));

	echo "<script>alert('Se actualizaron los datos')</script>";
echo "<script type='text/javascript'>
        window.location='panelU.php';
    </script>";

?>
