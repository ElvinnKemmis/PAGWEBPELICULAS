<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include 'menu/nav.php'?>
        <section  style=" background-color:black; color:white; padding:15px;">
            <h1 style="text-align:center; margin:0; pading:15px;"> REGISTRESE</h1>
            <div style="margin-left:30% ; margin-top:5%;">
                <form  id="tabla" action="procesar_registro.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <h2 >DATOS PERSONALES</h2>
                            <td>
                            
                                <label for="">NOMBRE</label>
                                <input type="text" name="nombre" placeholder="NOMBRES">
                            </td>
                            <td>
                                <label for="">APELLIDOS</label>
                                <input type="text" name="apellido" placeholder="APELLIDOS">
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <h2 >DATOS ADICIONALES</h2>
                            <td>
                                <label for="">TELEFONO</label>
                                <input type="...." name="telefono" placeholder="INGRESE SU TELEFONO "> 
                            </td>
                            <td>
                                <label for="">DIRECCION</label>
                                <input type="text" name="direccion" placeholder="INGRESE SU DIRECCIÓN">
                            </td>
                        </tr>
                        <tr>
                            
                            <td>
                                <label for="">CORREO</label>
                                <input type="email" name="correo" placeholder="INGRESE SU EMAIL">
                            </td>
                            
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <h2 >DATOS DE LA PAGINA</h2>
                            <td>
                                <label for="">USUARIO</label>
                                <input type="text" name="usuario" placeholder="INGRESE SU USUARIO">
                            </td>
                            <td>
                                <label for="">CONTRASEÑA</label>
                                <input type="password" name="contraseña" placeholder="INGRESE SU CONTRASEÑA">
                            </td>
                            <td>
                                <label >SUBIR SU FOTO DE PERFIL EN FORMATO JPG</label>
                                <input type="file" name="perfil" >
                            </td>
                            
                        </tr>
                    </table>
                    <div id="bot">
                        <button type="submit">REGISTRARSE</button>
                    
                    </div>
                </form>

            </div>
        </section>
    <?php include 'menu/footer.php'?>
</body>
</html>

