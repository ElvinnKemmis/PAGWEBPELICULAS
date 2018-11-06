<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include 'menu/nav.php'?>
    
    <form   action="procesar_foro.php" method="post">
        <table > 
            <tr>
                <td><textarea name="comentario" rows="6" cols="200"></textarea></td>
                
            </tr>
            <td><button type="submit">COMENTAR</button></td>
        </table>
        
    </form>
    
    <?php include 'menu/footer.php'?>
</body>
</html>
