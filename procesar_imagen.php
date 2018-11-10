<?php 
session_start();
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
#ENTRADA

$nombre_imagen=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$tipo=$_FILES['imagen']['type'];
$tamaño=$_FILES['imagen']['size'];

$carpeta_destino="imagenes_foro/".$nombre_imagen;
$u=$_SESSION["usuario"];

#PROCESAR
$subido= move_uploaded_file($archivo,$carpeta_destino);

$stmt=$db->query("INSERT INTO img VALUES(NULL,'$subido','$u',SYSDATE())");


session_start();

#salida
header('Location:foro.php');

?>