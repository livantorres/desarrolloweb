<!DOCTYPE html>
<html>
<head>
	<title>Invent19 | Menu</title>
	<link rel="icon" type="icon" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>




				
</head>
<body>



<?php include 'plantillas/header.php'; ?>

	<section class="main">

		<ul class="nav navbar-nav navbar-right">


			


			
				
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hola,".$_SESSION["usuario"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Carro</a></li>
						<li class="divider"></li>
						<li><a href="" style="text-decoration:none; color:blue;">Cambia la contraseña</a></li>
						<li class="divider"></li>
						<li><a href="cerrar.php" style="text-decoration:none; color:blue;">Cerrar sesión</a></li>
					</ul>
				</li>
				
			</ul>

		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>UAES | Unicor</h2>
					</div>





						<p><img src="img/logo.png">
						</p><br/><br/>
						<p>Bienvenidos a la aplicacion. Este software cubre todas las caracteristicas basicas para llevar un control de ventas, inventario y citas.</p>
						<br/><br/>
						<h3>Entre las caracteristicas de la plataforma tenemos: </h3><br/>
						<p>	
							- Gestion de Citas <br/>

							- Reporte e informes de citas 
							
						</p>
				</article>
	</section>
	<?php include 'plantillas/footer.php'; ?>

</body>



</html>