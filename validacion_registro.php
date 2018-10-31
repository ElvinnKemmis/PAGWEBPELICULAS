<?php
session_start();
?>

<?php include 'menu/nav.php'?>
    <h1 style="text-align:center;">REGISTRO EXITOSO</h1>
    <p>BIENVENIDO <?php echo $_SESSION["nombre"]?></p>
<?php include 'menu/footer.php'?>