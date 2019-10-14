<?php
include("conexion.php");
    login();
    function login(){
        $nombre = $_POST["user_name"];
        $password = $_POST["password"];
        $conn = getConexion();

        $query = "SELECT * FROM usuario 
                    WHERE nombre ='$nombre' AND password ='$password'";
		//echo $query;
		//exit();
        $resultado = mysqli_query($conn, $query);
        //echo $query;
        //exit();
        if (mysqli_num_rows($resultado)>0) {
            setcookie("login", $nombre, time() + 1000);
            session_start();
            $_SESSION['admin'] = true;
            header('location:admin.php');
        } else {
            header('location:login-form.php?fallo=true');
        }
}
?>
