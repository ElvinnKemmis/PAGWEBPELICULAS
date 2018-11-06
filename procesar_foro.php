<?php 
#ENTRADA
session_start();

$c=$_POST["comentario"];
$u=$_SESSION["usuario"];


#PROCESAR
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("INSERT INTO comentario VALUES(NULL,'$c','$u',SYSDATE())");
$comenatrio=$stmt->fetchAll();


session_start();


#SALIDA


header('Location:foro.php');

?>