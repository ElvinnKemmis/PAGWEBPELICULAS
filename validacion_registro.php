<?php
session_start();
?>
<form action="index.php">
    <?php include 'menu/nav.php'?>
        <h1 style="text-align:center;">REGISTRO EXITOSO</h1>
        <p style="font-family: fantasy;">BIENVENIDO <?php echo $_SESSION["nombre"]?></p>
        <button type="submit">INICIO</button>
</form>

<?php include 'menu/footer.php'?>