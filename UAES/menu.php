
<!DOCTYPE html>
<html>
<head>
	<title>UAES | Home</title>
	<link rel="icon" type="icon" href="img/logo.png">
	<link href="css/estilos.css">
</head>
<body>

<?php session_start();

if(isset($_SESSION['usuario'])){

	echo 'Iniciando sesión para '.$_SESSION['usuario'].' <p>';
	
	require 'contenido_vista.php';
}else{
	header('Location: login.php');
}
?>

</body>
</html>