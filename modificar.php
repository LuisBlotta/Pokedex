<?php
include("conexion.php");
modPokemons();
function modPokemons(){

	$numero = $_POST['numero'];
	$nombre = $_POST['nombre'];
	$tipo = $_POST['tipo'];
	$modificar = $_POST['modificar'];

    $target_dir = "recursos/uploads/";
    $path = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    echo $path ."<br>";

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($path,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $path)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }



    $conn = getConexion();

    $sql = "update pokemon 
    		set numero='$numero',
    			nombre='$nombre',
    			tipo='$tipo',
    			imgPath='$path'
    		where nombre = '$modificar'";
    $result = mysqli_query($conn, $sql);

   
    mysqli_close($conn);
}
header('Location:admin.php');

?>