

<!DOCTYPE html>
<html>
<head>
	<title>UAES | Iniciar Sesion</title>
	<link href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Antic" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="icon" type="image/x-icon" href="img/logo.png">









</head>
<body>




<?php session_start();

if (isset($_SESSION['usuario'])){
	header('Location: profile.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);
	$errores ='';	
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=invent19','root','');
	}catch(PDOException $e){
		echo "Error: ". $e->getMessage();
	}
	$statement = $conexion -> prepare(
			'SELECT * FROM usuario WHERE usuario = :usuario AND pass= :password');

	$statement ->execute(array(':usuario'=> $usuario,':password'=> $password));

	$resultado = $statement->fetch();
	if($resultado !==false){
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	}else{
		
		$errores .= 'Usuario o Contraseña Incorrecta';
	}
}
	require 'vista/login.php';
?>

</body>
</html>