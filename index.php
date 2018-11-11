<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("SELECT* FROM peliculas  ORDER BY id DESC");
$peliculas=$stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include 'menu/nav.php'?>

    <section style=" background-color:black; color:white;">
        <div  style=" width: 1230px;display: flex; flex-wrap: wrap;padding-left:96px;">

        
            <?php foreach($peliculas as $p){ ?>
                <div style="padding:20px;"> 
                    <form action="visualizacion.php" method="post">    
                        <input type="hidden" name="id" value="<?php echo $p["id"] ?>"> 
                        <button type="submit " > <img style="width:230px; eight: 320px;  " src="data:image/jpg;base64, <?php echo base64_encode($p["poster"]); ?>"></button>
                    </form>   
                    
                    </br>
                    <strong><p  style="font-family: fantasi; font-size: 12px; "> Titulo: <?php echo  $p["titlulo"]?> </p></strong>
                    <strong><p  style="font-family: fantasi; font-size: 12px;"> Duración: <?php echo  $p["duracion"]?> horas</p></strong>
                    <strong><p  style="font-family: fantasi; font-size: 12px;"> Genero: <?php echo  $p["genero"]?> </p></strong>
                    <strong><p  style="font-family: fantasi; font-size: 12px; "> Fecha Estreno: <?php echo  $p["estreno"]?> </p></strong>           
                </div>               
            <?php }?>
        </div>   
    </section>
    
    <?php include 'menu/footer.php'?>
</body>
</html>