<html>
<head>
    <?php
    include ('head.php');
    ?>
    <title>Crear</title>
</head>


<bodty>

<section class="login">
    <h2>Crear</h2>
    <p>Tipos: (1)Fuego (2)Agua (3)Hierba (4)Electrico</p>
    <form action="crear.php" method="post" class="form-group" enctype="multipart/form-data">
        <label>Numero</label>
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
        <button class="btn btn-primary boton">Crear</button>
    </form>
    <p><a href="admin.php">Volver al Inicio</a></p>
</section>
</bodty>
</html>