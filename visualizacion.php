<?php
session_start();

$id=$_POST["id"];

$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("SELECT* FROM peliculas WHERE id='$id' ");
$peliculas=$stmt->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>visualiacion</title>
</head>
<body>

    <?php include 'menu/nav.php'?>


    <section style=" background-color:black; color:white;">
        <div  style=" width: 1230px;display: flex;padding-left:96px;">

                    <?php foreach($peliculas as $p){ ?>
                        <div style="padding:20px;"> 
           
                            <img style="width:230px; eight: 320px;  " src="data:image/jpg;base64, <?php echo base64_encode($p["poster"]); ?>">
                            <strong><p  style="font-family: fantasi; font-size: 12px; "> Subido por: <?php echo  $p["usuario"]?> </p></strong>
                            <strong><p  style="font-family: fantasi; font-size: 12px; "> Fecha de subida: <?php echo  $p["fecha_publi"]?> </p></strong>
                            </br>
                                 
                        </div> 

                        <div style="padding:5% 15% 0 15%; font-size: 40px;">

                            <strong><p  style="font-family: fantasi;  font-size: 16px; "> DESCRIPCIÓN: <?php echo  $p["descripcion"]?> </p></strong>              
                            </br>
           
                            <strong><p  style=" font-size: 12px; "> Titulo: <?php echo  $p["titlulo"]?> </p></strong>
                            <strong><p  style=" font-size: 12px;"> Duración: <?php echo  $p["duracion"]?> horas</p></strong>
                            <strong><p  style=" font-size: 12px;"> Genero: <?php echo  $p["genero"]?> </p></strong>
                            <strong><p  style="font-size: 12px; "> Fecha Estreno: <?php echo  $p["estreno"]?> </p></strong>      
                        </div>
                <?php }?>
        </div>   
    </section>
    <section  style=" background-color:black; color:white; margin:0; padding 15px;">
        <h1 style="text-align: center; margin:0; " >VISUALIZADOR</h1> 
         

    </section>

    <?php include 'menu/footer.php'?>

</body>
</html>