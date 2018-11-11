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
</head>
<body>
    <?php include 'menu/nav.php'?>
    
    <form   action="procesar_foro.php" method="post">
        <table > 
            <tr>
                <td><textarea name="comentario" rows="6" cols="200"></textarea></td>
                
            </tr>
            <td><button type="submit">COMENTAR</button></td>
        </table>
        
    </form>

    <form action="procesar_imagen.php" method="post" enctype="multipart/form-data">
        <label >SELECIONE IMAGEN A SUBIR</label>
        <input type="file" name="imagen" >
        <button type="submit">ENVIAR</button>
    </form>

    <?php foreach($img as $i){ ?>
        <table>
            <tr>
                <td><img src="data:image/jpg;base64, <?php echo base64_encode($i["imagen"]); ?>"> </td>
                <td> <p  style="font-family: fantasi; font-size: 12px; color: blue;"><?php echo $i["usuario"] ?></p></td>
                <td><p style="font-family: fantasi; font-size: 12px; color: blue;"><?php echo $i["fecha"] ?></p></td>

                <form action="borrar_imagen.php" method="post">
                    <?php if($_SESSION["usuario"] == $i["usuario"]) {?>
                        <input type="hidden" name="id" value="<?php echo $i["id"] ?>">
                        <td><button type="submit">ELIMINAR IMAGEN</button></td>
                    <?php }?>
                </form>

            </tr>
        
        </table>

    <?php }?>



    
    <?php foreach($comentario as $c){ ?>
        <table>
            <tr>
                <td> <p><?php echo $c["comenta"] ?></p></td>
                <td>  <p  style="font-family: fantasi; font-size: 12px; color: blue;"><?php echo $c["usuario"] ?></p></td>
                <td><p style="font-family: fantasi; font-size: 12px; color: blue;"><?php echo $c["fecha"] ?></p></td>

                <form action="borrar_comentario.php" method="post">
                    <?php if($_SESSION["usuario"] == $c["usuario"]) {?>
                        <input type="hidden" name="id" value="<?php echo $c["id"] ?>">
                        <td><button type="submit">ELIMINAR COMENTARIO</button></td>
                    <?php }?>
                </form>

            </tr>
        
        </table>
        <?php }?>
    
   
    <?php include 'menu/footer.php'?>
</body>
</html>
