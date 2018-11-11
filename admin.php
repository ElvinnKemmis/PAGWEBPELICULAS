<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIAR_SECCION</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php include 'menu/nav.php'?>

<h1 style="font-family: fantasy; text-align:center; background-color: black; color:white; margin: 0px; padding:25px;">BIENVENIDO <?php echo $_SESSION['usuario']?></h1>
<p style="font-family: fantasy; font-size: 18px;background-color: black; color:white; margin: 0px; padding:25px;">Para poder subir peliculas, deberera rellenar los siguientes campos</p>

<div style="background-color:black; color:white; padding:15px; text-align:left;">
        <form action="datos_peli.php" method="post" enctype="multipart/form-data">
            <label >Selecione el Poster e la Pelicula en formato JPG</label>
            <input type="file" name="imagen" >
            </br>
            </br>
            <label >Titulo de la película:</label>
            <input type="text" name="titulo">
            </br>
            </br>
            <label >Duracion(en horas):</label>
            <input type="text" name="duracion">
            </br>
            </br>
            <label >Año de estreno:</label>
            <input type="date" name="estreno">
            </br>
            </br>
            <label >Genero:</label>
            <select type="text" name="genero">
                <option>AVENTURA</option>
                <option>ANIMADAS</option>
                <option>ACCION</option>
                <option>COMEDIA</option>
                <option>CIENCIA FICCION</option>
                <option>TERROR</option>
                <option>MUSICAL</option>
            </select>
            </br>
            </br>
            <label >Trailer(Link del Video promocional):</label>
            <input type="text" name="trailer">
            </br>
            </br>
            <button type="submit">SUBIR PELICULA</button>
        </form>
    
    </div>
<?php include 'menu/footer.php'?>

</body>
</html>