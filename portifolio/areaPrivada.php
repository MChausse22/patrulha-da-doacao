<?php
    session_start();
    if(!isset($_SESSION['i_codigo']))
    {
        header("location: index.php");
        exit;
    }
?>


Seja Bem Vindo!!
<a href="sair.php">Sair</a>