<?php

    session_start();

    unset($_SESSION['email']);
    unset($_SESSION['rol']);
    $_SESSION = array();
    session_destroy();
    session_write_close();
    header("Location: ../iniciar.php");

?>