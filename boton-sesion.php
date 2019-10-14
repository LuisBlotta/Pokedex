
<?php
if (!empty($_SESSION['admin'])){
    echo "<a type='button' class='btn btn-primary boton' href= 'logout.php'>Cerrar Sesión</a>";
}else{
    echo "<a type='button' class='btn btn-primary boton' href='login-form.php'>Iniciar Sesión</a>";
}
?>