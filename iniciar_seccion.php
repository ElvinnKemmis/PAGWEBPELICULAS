<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIAR_SECCION</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body >
<?php include 'menu/nav.php'?>

<form id="tabla" action="procesar_seccion.php" method="post" style=" background-color:black; color:white; padding:15px; margin:0;">
    <h2 style=" text-align:center;">INGRESE SUS DATOS PARA INICIAR SECCION </h2>
    <section style="  padding-left:30%; padding-top:5%; ">
    <table >
        <tr>
            
                <td>
                    <label for="">USUARIO</label>
                    <input type="text" name="usuario">
                </td>
                <td>
                    <label for="">CONTRASEÑA</label>
                    <input type="password" name="contraseña">
                </td>
                                
        </tr>
    </table>
    <div id="bot"  >
        <button type="submit">INICIAR SECCION</button> 
    </div>
    
</form>
</section>
<?php include 'menu/footer.php'?>

</body>
</html>