<?php
session_start();
?>
<section style="background-color:black; color:white; margin:0; padding 15%;">
    
        <?php include 'menu/nav.php'?>
            <h1 style="text-align:center; ">REGISTRO EXITOSO</h1>
            <p style="font-size: 20px; text-align:center; margin:0; padding:15px;">BIENVENIDO <?php echo $_SESSION["nombre"]?></p>
            
    
</section>

<?php include 'menu/footer.php'?>