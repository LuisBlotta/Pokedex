<?php
include("conexion.php");

function getPokemons(){

    $conn = getConexion();
    $buscado = $_POST['buscado'];

    $sql = "SELECT numero, nombre, tipo.descripcion as tipo, imgPath FROM pokemon join tipo on pokemon.tipo = tipo.id where nombre like '$buscado%' or tipo.descripcion like '$buscado%' or numero like '$buscado%'  group by numero";
    $result = mysqli_query($conn, $sql);

    $pokemons = Array();
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $pokemon = Array();
            $pokemon['numero'] =  $row["numero"];
            $pokemon['nombre'] =  $row["nombre"];
            $pokemon['tipo'] =  $row["tipo"];
            $pokemon['imgPath'] =  $row["imgPath"];


            $pokemons[] = $pokemon;
        }
    }else{
        echo "<h1 class='noEncontrado'>Ningún Pokemon encontrado!</h1>";

        $sql = "SELECT numero, nombre, tipo.descripcion as tipo, imgPath FROM pokemon join tipo on pokemon.tipo = tipo.id group by numero";
        $result = mysqli_query($conn, $sql);

        $pokemons = Array();
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $pokemon = Array();
                $pokemon['numero'] =  $row["numero"];
                $pokemon['nombre'] =  $row["nombre"];
                $pokemon['tipo'] =  $row["tipo"];
                $pokemon['imgPath'] =  $row["imgPath"];
                $pokemons[] = $pokemon;
            }
        }
        mysqli_close($conn);
        return $pokemons;
    }
    mysqli_close($conn);
    return $pokemons;
}

$pokemons = getPokemons();


?>