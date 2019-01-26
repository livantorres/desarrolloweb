<!DOCTYPE html>
<html>
<head>
	<title>Invent19 | Citas</title>
	<link rel="icon" type="icon" href="img/spa.png">
</head>
<body>


<?php
$mensaje='';
try{
	$conexion = new PDO('mysql:host=localhost;dbname=invent19','root','');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}

$consulta = $conexion -> prepare("
		SELECT * FROM citas  
		Inner Join clientes on citas.clientes_Idcliente=clientes.Idcliente
		inner join empleado on citas.empleado_Idempleado = empleado.Idempleado 	where Fecha =current_date() 
		group by citas.Idcitas");

$consulta ->execute();
$consulta = $consulta ->fetchAll();
if(!$consulta){
	$mensaje .= 'VACIO';
}
?>
<?php include 'plantillas/header.php' ?>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php' ?>
				<article>
					<div class="mensaje">
						<h2>CITAS</h2>
					</div>
					<a class="agregar" href="agregarcitas_vista.php">Programar una Cita</a>
					
					<table class="tabla">
						  <tr>
							<th>ID</th>
							<th>Cliente</th>
							<th>Empleado</th>
							<th>Fecha</th>
							<th>Hora</th>
							
							<th>Observaciones</th>
							<th colspan="2">Opciones</th>
						  </tr>
						<?php foreach ($consulta as $Sql): ?>
						<tr>
						<?php echo "<td class='mayusculas'>". $Sql['Idcitas']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['Nombre']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['emNombre']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['Fecha']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['Hora']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['Observaciones']. "</td>"; ?>
                        <?php echo "<td class='centrar'>"."<a href='actualizarcitas_vista.php?Idcitas=".$Sql['Idcitas']."' class='editar'>Editar</a>". "</td>"; ?>
						<?php echo "<td class='centrar'>"."<a href='deletecitas.php'=".$Sql['Idcitas']."' class='eliminar'>Eliminar</a>". "</td>"; ?>
						</tr>
						<?php endforeach; ?>
						</table>
						<?php  if(!empty($mensaje)): ?>
							<ul>
							  <?php echo $mensaje; ?>
							</ul>
						<?php  endif; ?>	 
				</article>
	</section>
<?php include 'plantillas/footer.php'; ?>
</body>
</html>