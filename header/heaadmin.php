<?php
error_reporting(0);
session_start();
$actualsesion = $_SESSION['usuario'];

if($actualsesion == null || $actualsesion == ''){

    echo '<img src="../img/block.png" width="1340" height="600"> ';
    die();
}
?>