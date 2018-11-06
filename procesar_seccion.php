<?php 
#ENTRADA
$u=$_POST["usuario"];
$p=$_POST["contraseña"];

#PROCESAR
$pa=sha1($p);
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("SELECT* FROM usuarios WHERE usuario='$u' AND contraseña='$pa'");
$usuarios=$stmt->fetchAll();

$validacion=false;
if(count($usuarios)==1){
    $validacion=true;
    session_start();
    $_SESSION["usuario"]=$u;
    $_SESSION["contraseña"]=$pa;
}
#SALIDA

if($validacion){
    header('Location:index.php');
}
else{
    header('Location: iniciar_seccion.php?error=1');
}
?>