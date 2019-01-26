<!DOCTYPE html>
<html>
<head>
	<title> UAES | Insertar Citas</title>
	<link rel="icon" type="icon" href="img/logo.png">

	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


		
 	<?php include 'plantillas/header.php'; ?>

 	<section class="main">
 		<div class="wrapp">
 
			 	<?php include 'plantillas/nav.php'; ?>
			 <article>
					<div class="mensaje">
						<h2>MENSAJE DE OPERACION</h2> 
					</div>

					<?php

include('conexion.php');
$pdo = connect();







	


try {
	$sql = "INSERT INTO citas ( user, medicina_general_idmedicina_general , hora, fecha, observaciones) VALUES ( :user, :medicina_general_idmedicina_general , :hora, :fecha , :observaciones)";
	$query = $pdo->prepare($sql);
	
	$query->bindParam(':user', $_POST['user'], PDO::PARAM_STR);
	$query->bindParam(':medicina_general_idmedicina_general', $_POST["medicina_general_idmedicina_general"], PDO::PARAM_STR);
	$query->bindParam(':hora', $_POST['hora'], PDO::PARAM_STR);
	$query->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);
	$query->bindParam(':observaciones', $_POST['observaciones'], PDO::PARAM_STR);
	
	$query->execute();
	echo '<script> alert("SU CITA HA SIDO REGISTRADA CON EXITO");</script>';
	echo '<script> window.location="medgeneral.php"; </script>';
} catch (PDOException $e) {
	print "No se puede agregar";
	echo 'PDOException : '.  $e->getMessage();
}

?>

					<form method="post" action="medgeneral.php" >
						<input type="submit" class="btn-regresar" value="Regresar">
					</form>
		</div>
			</article>

	</section>

<?php include 'plantillas/footer.php'; ?>
</body>
</html>