<!DOCTYPE html>
<html>
<head>

    <?php
    include ('head.php');
    ?>

	<title>Modificar</title>
</head>
<body>


<section class="login">
		<h2>Modificar</h2>
    <p>Tipos: (1)Fuego (2)Agua (3)Hierba (4)Electrico</p>

    <form action="modificar.php" method="post" class="form-group" enctype="multipart/form-data">
			<label>Pokemon a Modificar</label>
			<?php 
				$modificar = $_GET['nombre'];
				
				echo" 
				<input type='text' class='form-control' name='modificar' value=".$modificar." readonly>";
			?>
			<br>
			<h4>Nuevos datos</h4>
			<label>Número</label>
			<input type="text" class="form-control" name="numero" required>
        <br>
			<label>Nombre</label>
			<input type="text" class="form-control" name="nombre" required>
        <br>
			<label>Tipo</label>
			<input type="text" class="form-control" name="tipo" required>
			<br>
        Seleccione imagen (recomendado 108 x 108 px)
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
			<button class="btn btn-primary boton">Modificar</button>
		</form>
    <p><a href="admin.php">Volver al Inicio</a></p>
	</section>

</body>
</html>