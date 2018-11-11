<?php
session_start();

$i= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$u=$_SESSION['usuario'];

$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("INSERT INTO img VALUES(NULL,'$i','$u',SYSDATE())");


session_start();
	
header('Location:foro.php');

?>