<!DOCTYPE html>
<html>
<head>
	<title> Invent19 | Actualizar Citas</title>
	<link rel="icon" type="icon" href="img/spa.png">
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
									$Idcitas =$_POST['Idcitas'];
									$clientes_Id_clientes =$_POST['clientes_Id_clientes'];
									$empleado_Id_empleado =$_POST['empleado_Id_empleado'];
									$Fecha =$_POST['Fecha'];
									$Hora =$_POST['Hora'];
									$Observaciones =$_POST['Observaciones'];
									


								$sql= "update citas set clientes_Id_clientes='$clientes_Id_clientes', empleado_Id_empleado='$empleado_Id_empleado', Fecha='$Fecha', Hora='$Hora', Observaciones='$Observaciones' where Idcitas='$Idcitas' " ;



								$Ban=$misqli->query($sql);

								if ($Ban) 
									echo "Registro exitoso";
								else 
									echo "Registro no exitoso -- $clientes_Id_clientes, $empleado_Id_empleado, $Fecha, $Hora, $Observaciones";
							



								$misqli -> Close();


								
							?>
					
		</div>
			</article>

	</section>

<?php include 'plantillas/footer.php'; ?>
</body>
</html>