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
    <title>Document</title>
</head>
<body>
    <?php include 'menu/nav.php'?>
    <h1 style=" background-color:black; color:white; margin:0; padding: 15px; text-align:center;">TRAILER</h1>
    <section style=" background-color:black; color:white;">
    
        <div  style=" width: 1230px;display: flex; flex-wrap: wrap;padding-left:96px;">

            <?php foreach($peliculas as $p){ ?>
                <div style="padding:20px;"> 
                        
                    <iframe width="320" height="230"  src="<?php echo  $p["triller"]?>"  allowfullscreen frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" ></iframe>
                    </br>
                    <strong><p  style="font-family: fantasi; font-size: 12px;"> Titulo: <?php echo  $p["titlulo"]?> </p></strong>
                    <strong><p  style="font-family: fantasi; font-size: 12px;"> Genero: <?php echo  $p["genero"]?> </p></strong>
                               
                </div>               
            <?php }?>
        </div>  

    </section>

    <?php include 'menu/footer.php'?>
</body>
</html>
