<?php 
#ENTRADA
$u=$_POST["usuario"];
$p=$_POST["contraseña"];

#PROCESAR
$pa=sha1($p);
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("SELECT* FROM usuarios WHERE usuario='$u' AND contraseña='$p'");
$usuarios=$stmt->fetchAll();

$validacion=false;
if(count($usuarios)==1){
    $validacion=true;
    session_start();
    $_SESSION["usuario"]=$u;
    $_SESSION["contraseña"]=$p;
}
#SALIDA

if($validacion){
    header('Location:index.php');
}
else{
    header('Location: logi.php?error=1');
}
?>