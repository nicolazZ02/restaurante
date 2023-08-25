<?php
    require("../../conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
<form action="crear.php" method="get">
    <div>
        <input type="text" id="ced" name="id" placeholder="Cedula" >

                    <select id="tip" name="tip" scope="col">
                        <option>Seleccione...</option>
                            <?php
		                        $sql= "SELECT * FROM rol"; 
		                        $resultado=$bd->prepare($sql);
		                        $resultado->execute(array());
		                        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		                            ?> 
                                    <option value="<?php echo($registro['id_rol'])?>"> <?php echo($registro['tip_rol'])?>
                                <?php 
                                }
                                ?>
                    </select>
                    <input type="text" id="nombre" name="nomb" placeholder="Nombre" >
                    
                    <input type="teñxt" id="apellido" name="apel" placeholder="Apellido">

                    <input type="password" id="contraseña" name="clave" placeholder="Contraseña">

                    <input type="text" id="telefono" name="tel" placeholder="Celular">

                    <input type="text" id="correo" name="email" placeholder="Correo">

                    <input type="submit" id="crear" class="btn btn-primary" name="mod" value="Crear">
                    
                  
    </div>
    </form>
    <script>
        var boton= document.getElementById('crear');

        var ced = document.getElementById("ced");

        var tipo = document.getElementById("tip");

        var nombre = document.getElementById("nombre");

        var apellido = document.getElementById("apellido");

        var contra = document.getElementById("contraseña");

        var tel = document.getElementById("telefono");

        var email = document.getElementById("correo");

        boton.addEventListener("click", function (evt) {
            if (ced.value === '') {
                alert("El espacio cedula esta vacio")
                evt.preventDefault();
                return false;
            }
            else if(tipo.value === "Seleccione..."){
                alert("Seleccione una opcion de rol valida")
                evt.preventDefault();
                return false;
            }
            else if(nombre.value === ''){
                alert("El espacio nombre esta vacio")
                evt.preventDefault();
                return false;
            }
            else if(apellido.value === ''){
                alert("El espacio apellido esta vacio")
                evt.preventDefault();
                return false;
            }
            else if(contra.value === ''){
                alert("El espacio contraseña esta vacio")
                evt.preventDefault();
                return false;
            }
            else if(tel.value.length >= 11){
                alert("Numero de telefono invalido")
                evt.preventDefault();
                return false;
            }
            else if(tel.value === ''){
                alert("El espacio de telefono esta vacio")
                evt.preventDefault();
                return false;
            }
            else if(email.value === ''){
                alert("El espacio correo esta vacio")
                evt.preventDefault();
                return false;
            }
        }) 
    </script>
</body>
</html>