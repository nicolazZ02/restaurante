<?php
    session_start();
    require('../conexion/conexion.php');

    if (!isset($_GET['id']) || !isset($_GET['btn'])) {
        header("Location: ../index.php");
    }
    elseif (isset($_GET['btn'])) {
        try {
            $inicio = htmlentities(addslashes($_GET['id']));
            $clave = htmlentities(addslashes($_GET['clave']));
            $contador = 0;

            $sentencia = "SELECT * FROM usuarios,rol WHERE id_usu=:id OR email=:co and usuarios.id_rol=rol.id_rol";
            $select= $bd->prepare($sentencia);
            $select->execute(array(":id"=>$inicio,":co" =>$inicio));
            
            if ($user=$select->fetch(PDO::FETCH_ASSOC)) {
                if (password_verify($clave, $user['contraseña'])) {
                    
                    $id = $user['id_usu'];
                    $idrol = $user['id_rol'];
                    $nombre = $user['nom_usu'];
                    $apellido = $user['ape_usu'];
                    $tel = $user['tel_usu'];
                    $email = $user['email'];
                    $tipo = $user['tip_rol'];
                    /* Variables Globales */
                    $_SESSION['id'] = $id;
                    $_SESSION['idrol'] = $idrol;
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['apellido'] = $apellido;
                    $_SESSION['tel'] = $tel;
                    $_SESSION['email'] = $email;
                    $_SESSION['rol'] = $tipo;
                    $contador++;
                }
            }
            if ($contador > 0) {
                if ($_SESSION['idrol'] == 1) {
                    header('Location: ../admin/index.php');
                }
                elseif ($_SESSION['idrol'] == 2) {
                    header('Location: ../mesero/index.php');
                }
                elseif ($_SESSION['idrol'] == 3) {
                    header('Location: ../jefeco/index.php');
                }
                elseif ($_SESSION['idrol'] == 4) {
                    header('Location: ../cliente/index.php');
                }
            }
            else{
                require('../error.php');
            }

        } catch (Exception $e) {
             die("Error " . $e->getMessage());
        }
    }

?>