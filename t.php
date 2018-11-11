<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("SELECT* FROM peliculas WHERE (genero LIKE 'TERROR')");
$peliculas=$stmt->fetchAll();

?>
<div  style=" background-color:black; color:white; padding:15px; text-align:center;"><a  style=" background-color:black; color:white; text-decoration: none ; " href="categorias.php">RETORNAR </a></div>
<?php include 'menu/nav.php'?>
<section style=" background-color:black; color:white;">
        <div  style=" width: 1230px;display: flex; flex-wrap: wrap;padding-left:96px;">

        
            <?php foreach($peliculas as $p){ ?>
                <div style="padding:20px;"> 
                          
                    <img style="width:230px; eight: 320px;  " src="data:image/jpg;base64, <?php echo base64_encode($p["poster"]); ?>"> 
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