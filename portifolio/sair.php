<?php
session_start();
unset($_SESSION['i_codigo']);
header("location: index.php")
?>