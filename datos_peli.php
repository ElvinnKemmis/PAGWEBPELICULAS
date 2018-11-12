<?php
session_start();

$i= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$t=$_POST['titulo'];
$d=$_POST['duracion'];
$e=$_POST['estreno'];
$g=$_POST['genero'];
$tr=$_POST['trailer'];
$d=$_POST['descrip'];
$p=$_POST['pelicula'];
$u=$_SESSION['usuario'];


$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("INSERT INTO peliculas VALUES(NULL,'$t','$i','$d','$e','$g','$tr','$u',SYSDATE(),'$d','$p')");


session_start();
	
header('Location:index.php');

?>