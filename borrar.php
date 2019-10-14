<?php
include("conexion.php");

delPokemons();
function delPokemons(){

	$borrar = $_GET['numero'];
	
    $conn = getConexion();

    $sql = "delete from pokemon where numero = $borrar"; // Si es INT va sin comillas
    $result = mysqli_query($conn, $sql);

   
    mysqli_close($conn);
    echo "Borrado";
}
header('Location:admin.php');


    

?>