<?php
session_start();
;?>
<!DOCTYPE html>
<html>
<head>
	<title>Pokedex</title>
    <?php
    include ('head.php');
    ?>
</head>
<body>

	<h2 class="text-center">Pokedex</h2>
    <div class="sesion">
        <?php
        include("boton-sesion.php");
        ?>
    </div>
	<section>
		<form class="form-inline buscador" action="index.php" method="post">
			<input type="text"  class="form-control puto" name="buscado">
			<button class="btn btn-primary boton" name="buscar">Buscar</button>


        </form>
	</section>
    <br><br>
	<table class="table">
		<tr>
			<th class="col-md-3">Numero</th>
			<th class="col-md-3">Nombre</th>
			<th class="col-md-3">Tipo</th>
			<th class="col-md-3">Img</th>

		</tr>

		<?php

		if(isset($_POST['buscar'])) {
			include("buscar.php");
		}
			else{
				include("mostrar.php");	
			}	

		
		foreach ($pokemons as $pokemon){
			switch ($pokemon['tipo']) {
				case "Electrico":
					echo   "<tr class='warning'>";								
					break;
				case "Agua":
					echo   "<tr class='info'>";								
					break;
				case "Hierba":
					echo   "<tr class='success'>";								
					break;	
		
				case "Fuego":
					echo   "<tr class='danger'>";
					break;

				default:
					echo   "<tr>";
					break;
			}

			echo   "<td><p class='ptabla'>" . $pokemon['numero'] . "</p></td>
						<td><p class='ptabla'>" . $pokemon['nombre'] . "</p></td>
						<td> <p class='ptabla'>" . $pokemon['tipo'] . "</p></td>
						<td><img src=". $pokemon['imgPath'] ."></td>
						
					</tr>";		

		}
		?>
	</table>


	
		
	

</body>
</html>