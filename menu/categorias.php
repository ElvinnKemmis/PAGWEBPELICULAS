<?php

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
    <title>categoria</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
   
    <div id="cat" >
        <ol >
           
                
                <ul><a href="av.php">AVENTURA</a> </ul>
                <ul><a href="an.php">ANIMADAS</a></ul>
                <ul><a href="ac.php">ACCION</a></ul>
                <ul><a href="co.php">COMEDIA</a></ul>
                <ul><a href="cf.php">CIENCIA FICCION</a></ul>
                <ul><a href="t.php">TERROR</a></ul>
                <ul><a href="m.php">MUSICAL</a></ul>
                <ul><a href="r.php">ROMANTICA</a></ul>     
            


        </ol>
    </div>
    
    
    </body>
</html>