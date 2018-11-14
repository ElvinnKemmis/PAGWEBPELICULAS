<?php
session_start();

$i= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$c=$_POST['com'];
$u=$_SESSION['usuario'];

$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("INSERT INTO img VALUES(NULL,'$i','$u',SYSDATE(),'$c')");


session_start();
	
header('Location:foro.php');

?>