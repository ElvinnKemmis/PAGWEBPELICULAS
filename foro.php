<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("SELECT* FROM comentario  ORDER BY id DESC");
$comentario=$stmt->fetchAll();

$stmt=$db->query("SELECT* FROM img  ORDER BY id DESC");
$img=$stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include 'menu/nav.php'?>
    <section style="background-color: black; color:white;">
    <h1 style="font-family: fantasy; text-align:center; background-color: black; color:white; margin: 0px; padding:25px;">SECCION FORO</h1>
    <p style=" font-size: 18px;background-color: black; color:white; margin: 0px; padding:25px;">Escriba en la caja de comentarios para poder comentar:</p>
    
    <div style="background-color:black; color:white; padding:15px; text-align:center;">
        <form action="procesar_imagen.php" method="post" enctype="multipart/form-data">
            <label >SI DESEA SUBIR UNA IMAGEN POR FAVOR SELECIONE LA IMAGEN EN FORMATO JPG</label>
            <input type="file" name="imagen" >
            <button type="submit">PUBLICAR</button>
        </form>
    
    </div>
    
    <form   action="procesar_foro.php" method="post">
        <table style="margin-left:30%;"> 
            <tr >
                <td ><textarea name="comentario" rows="6" cols="80"></textarea></td>
            </tr>
                <td style="padding-left:45%;" ><button type="submit">COMENTAR</button></td>
        </table>
        
    </form>
    </br>
    </br>
    <section style="display: flex; " id="img_conte" >
        <div id="imge" >
            <h1 style="text-align:center;">IMAGENES</h1>

            <?php foreach($img as $i){ ?>
                <div style="margin:15px;">

                    <div style="margin-left:35%;">       
                        <td><img style="width: 50%; " src="data:image/jpg;base64, <?php echo base64_encode($i["imagen"]); ?>"> </br>
                    </div> 
                            <p  style="font-family: fantasi; font-size: 12px; text-align:center;">Publicado por <?php echo  $i["usuario"]?> el <?php echo $i["fecha"] ?> </p>
                    <div style="margin-left:45%;">
                            <form action="borrar_imagen.php" method="post">
                                <?php if($_SESSION["usuario"] == $i["usuario"]) {?>
                                    <input type="hidden" name="id" value="<?php echo $i["id"] ?>">
                                    <button type="submit">ELIMINAR IMAGEN</button></td>
                                <?php }?>
                            </form>
                    </div>
                </div>
            <?php }?>    
        </div>
                     
            
        <div id="conte">    
               <h1 style="text-align:center">COMENTARIOS</h1>
                <?php foreach($comentario as $c){ ?>
                        <div style="border: 2px solid red; padding: 6px;margin:9px;">
                               <strong><p><?php echo $c["comenta"] ?></p></strong>
                                <p  style="font-family: fantasi; font-size: 12px; color: white;">Publicado por <?php echo $c["usuario"] ?> el <?php echo $c["fecha"] ?></p>

                                <form action="borrar_comentario.php" method="post">
                                    <?php if($_SESSION["usuario"] == $c["usuario"]) {?>
                                        <input type="hidden" name="id" value="<?php echo $c["id"] ?>">
                                        <button type="submit">ELIMINAR COMENTARIO</button>
                                    <?php }?>
                                </form>
                        </div>
                <?php }?>
        
        </div>
    </section>
    </section>
    <?php include 'menu/footer.php'?>
</body>
</html>
