<?php
#entrada
$id = $_POST["id"];

#proceso
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("DELETE FROM comentario WHERE id='$id'");


#salida

header("Location: foro.php");
?>