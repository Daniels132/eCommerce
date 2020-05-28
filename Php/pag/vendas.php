<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}
$_SESSION['compra']=$_POST['input'];
header("Location: lg.php");
exit();
?>
