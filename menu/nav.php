
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navegador</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body >

    <nav id="nave">
        <ol>
            <li ><img id="img" src="wkYUX_Iq.JPG" style="width: 230px; eight: 320px;" ></li>
            <li><a href="index.php" >INICIO</a> </li>
            <li><a href="categoriass.php" >CATEGORIAS</a> </li>
            <li><a href="trillers.php" >TRAILER</a> </li>

            <?php if(isset($_SESSION["usuario"])){?>
                <li><a href="foro.php" >FORO</a></li>
            <?php }?>

            <?php if(isset($_SESSION["usuario"])){?>
                <li><a href="cerrar_session.php" >CERRAR SECCION    (<?php echo $_SESSION["usuario"]?>)</a> </li>
            <?php } else { ?>
                <li><a href="registrarse.php">REGISTRARASE</a></li>
                <li><a href="iniciar_seccion.php">INICIAR SESION</a></li>

            <?php } ?>

            
            
        </ol>
    
    </nav>
</body>
</html>