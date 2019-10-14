<?php
session_start();
if (empty($_SESSION['admin'])) {
    header('location:index.php');
};?>
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


    <section>
    <form class="form-inline buscador" action="index.php" method="post">
        <div class="sesion">
            <?php
            include("boton-sesion.php");
            ?>
        </div>
        <input type="text"  class="form-control" name="buscado">
        <button class="btn btn-primary boton" name="buscar">Buscar</button>
        <br><br><br>
        <a type='button' class='btn btn-primary boton' href= 'form-crear.php'>Crear Pokemon</a>
    </form>
</section>
<br><br>
<table class="table">
    <tr>
        <th class="col-md-2">Numero</th>
        <th class="col-md-2">Nombre</th>
        <th class="col-md-2">Tipo</th>
        <th class="col-md-2">Img</th>
        <th class="col-md-2">Modificar</th>
        <th class="col-md-2">Borrar</th>
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
        echo           "<td><p class='ptabla'>" . $pokemon['numero'] . "</p></td>
						<td> <p class='ptabla'>" . $pokemon['nombre'] . "</p></td>
						<td> <p class='ptabla'>" . $pokemon['tipo'] . "</p></td>
						<td> <img src=". $pokemon['imgPath'] ."></td>
						<td><p class='ptabla'> <a href='formModificar.php?nombre=" . $pokemon['nombre'] . "'> Modificar </a></p></td>
						<td><p class='ptabla'> <a href='borrar.php?numero=" . $pokemon['numero'] . "'> Borrar </a></p></td>
					</tr>";

    }
    ?>
</table>






</body>
</html>