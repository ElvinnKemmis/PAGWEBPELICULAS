<?php 
#ENTRADA
$i= addslashes(file_get_contents($_FILES['perfil']['tmp_name']));
$n=$_POST["nombre"];
$a=$_POST["apellido"];
$t=$_POST["telefono"];
$d=$_POST["direccion"];
$c=$_POST["correo"];
$u=$_POST["usuario"];
$p=$_POST["contraseña"];

#PROCESAR
$p=sha1($p);
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("INSERT INTO usuarios VALUES(NULL,'$n','$a','$t','$d','$c','$u','$p','$i')");

session_start();
$_SESSION["nombre"]=$n;
$_SESSION["usuario"]=$u;
$_SESSION["contraseña"]=$p;

#salida
header('Location:validacion_registro.php');

?>