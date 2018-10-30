<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <?php include 'menu/nav.php'?>
        <section>
            <h1 style="text-align:center; font-family: fantasy;"> REGISTRESE</h1>
            <div id=" tabla_reg">
            
                <table>
                    <tr>
                        <h2 style=" font-family: fantasy;">DATOS PERSONALES</h2>
                        <td>
                           
                            <label for="">NOMBRE</label>
                            <input type="text">
                        </td>
                        <td>
                            <label for="">APELLIDOS</label>
                            <input type="text">
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <h2 style=" font-family: fantasy;">DATOS ADICIONALES</h2>
                        <td>
                            <label for="">TELEFONO</label>
                            <input type="text">
                        </td>
                        <td>
                            <label for="">DIRECCION</label>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        
                        <td>
                            <label for="">CORREO</label>
                            <input type="text">
                        </td>
                        
                    </tr>
                </table>
                <table>
                    <tr>
                        <h2 style=" font-family: fantasy;">DATOS DE LA PAGINA</h2>
                        <td>
                            <label for="">USUARIO</label>
                            <input type="text">
                        </td>
                        <td>
                            <label for="">CONTRASEÑA</label>
                            <input type="text">
                        </td>
                        
                    </tr>
                </table>
                
            </div>
        </section>
    <?php include 'menu/footer.php'?>
</body>
</html>

