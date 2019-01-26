<!DOCTYPE html>
<html>
<head>
	<title> Invent19 | Insertar Citas</title>
	<link rel="icon" type="icon" href="img/logo.png">
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
									include ("conexion.php");
									$user =$_POST['user'];
									$medicina_general_idmedicina_general =$_POST['medicina_general_idmedicina_general'];
									$odontologia_idodontologia =$_POST['odontologia_idodontologia'];
									$fecha =$_POST['fecha'];
									$hora =$_POST['hora'];
									$observacion =$_POST['observacion'];
									


										

								$sql="insert into citas (user, medicina_general_idmedicina_general, fecha, hora, Observaciones) values ('$clientes_Id_clientes' , '$empleado_Id_empleado' , '$Fecha' , '$Hora' , '$Observaciones')";



								$Ban=$misqli->query($sql);

								if ($Ban) 
									echo "Registro exitoso";
								else 
									echo "Registro no exitoso -- ($clientes_Id_clientes , $empleado_Id_empleado , $Fecha , $Hora , $Observaciones)";
							



								$misqli -> Close();
			
										

								
							?>
					<form method="post" action="agregarcitas_vista.php" >
						<input type="submit" class="btn-regresar" value="Regresar">
					</form>
		</div>
			</article>

	</section>

<?php include 'plantillas/footer.php'; ?>
</body>
</html>