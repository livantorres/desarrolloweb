<?php session_start();
if(!isset($_SESSION['usuario']))
header('Location: login.php');

require('citas_vista.php');
?>