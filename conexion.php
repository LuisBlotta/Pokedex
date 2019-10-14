<?php

function getConexion(){
    $servername = "localhost:3307";
    $username = "root";
    $dbname = "pokemons_Blotta_Luis";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

?>