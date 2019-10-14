<?php
	$a="";
    	if (isset($_COOKIE["login"])) {
    	 $a = $_COOKIE["login"];
    	}
    	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include ('head.php');
    ?>


    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Iniciar Sesión</title>

</head>
<body>
	<main>
        <section class="login">
        <h1 class="iniciarsesion">Inciar sesión</h1>

			<form action="login.php" method="post">
				<div class="form-group">
					<label for="user_name">Nombre de Usuario</label>
					<input class="form-control mr-sm-2" type="text" name="user_name" placeholder="Usuario" value='<?php echo $a; ?>' required>
				</div>	
			
				<div class="form-group">
					<label for="user_name">Contraseña</label>
					<input class="form-control mr-sm-2" type="password" name="password" placeholder="Contraseña" required>
				</div>
				<?php
					if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true'){
						echo "<div style='color:red'>Usuario o contraseña invalido </div>";
					}
				?>
				<button class="btn btn-info boton">Entrar</button>
			</form>
            <br>
			<p><a href="index.php">Volver al Inicio</a></p>
		</section>
	</main>
</body>
</html>