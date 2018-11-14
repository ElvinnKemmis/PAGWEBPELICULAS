<?php
$c= $_GET["usuario"];
session_start();
$db = new PDO('mysql:host=localhost;dbname=paginawebpeli; charset=utf8mb4', 'root', ''); 
$stmt=$db->query("SELECT* FROM usuarios  WHERE(usuario like '$c')");
$usuarios=$stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>datos</title>
    <link rel="stylesheet" href="css/sty.css">
</head>
<body>
    <?php include 'menu/nav.php'?>
    <section  id="cont">
        <h1 style="text-align: center; margin:0; padding: 15px;">DATOS</h1>

        <?php foreach($usuarios as $u){ ?>
            <section id="c">
                <div >
                    <table  id="t1"style="padding: 15px;">
                        <tr>
                            <td>NOMBRE: <?php echo  $u["nombre"]?></td>
                            <td>APELLIDOS: <?php echo  $u["apellido"]?></td>
                        </tr>
                        <tr>
                            <td>TELEFONO: <?php echo  $u["telefono"]?></td>
                            <td>DIRECCIÓN: <?php echo  $u["dirrecion"]?></td>
                            <td>EMAIL: <?php echo  $u["correo"]?></td>
                        </tr>
                        <tr>
                            <td>USUARIO: <?php echo  $u["usuario"]?></td>
                            
                        </tr>

                    </table>
                </div>
                <div style=" margin-left: 10%;">
                    <img style="width: 230px; height:320px; " src="data:image/jpg;base64, <?php echo base64_encode($u["perfil"]); ?>">
                </div>
        </section>
        <?php }?>

    </section>
    <?php include 'menu/footer.php'?>
</body>
</html>