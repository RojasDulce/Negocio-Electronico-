
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nutriologia</title>
</head>
<body>
    
    <div class="form-container">
        <div class="login-container">
            <h2>Registro</h2>
            <p>Ingresa tus datos para continuar</p>

            <form action="registroc.php" name="registroc" method="POST">
                <p>
                    <label for="name">Nombre</label>
                    <input class="input" type="text" name="name" id="name">
                </p>
                <p>
                    <label for="lastname">Apellido paterno</label>
                    <input class="input" type="text" name="lastname" id="lastname">
                </p>
                <p>
                    <label for="lastname2">Apellido materno</label>
                    <input class="input" type="text" name="lastname2" id="lastname2">
                </p>
                <p>
                    <label for="email">correo Electronico</label>
                    <input class="input" type="email" name="email" id="email">
                </p>
                <p>
                    <label for="direccion">Dirección</label>
                    <input class="input" type="text" name="direccion" id="direccion">
                </p>

                <p>
                    <label for="password">Contraseña</label>
                    <input class="input" type="password" name="password" id="password">
                </p>
                <p>
                    <label for="cpassword">Confirmar Contraseña</label>
                    <input class="input" type="password" name="cpassword" id="cpassword">
                </p>

                

                <p>
                    <input type="submit" class="btn btn-login" value="registrarse">
                </p>

                <div class="options">
                    <div>
                        Acepto terminos y condiciones <input type="checkbox" name="rememberme" id="rememberme">
                    </div>
                    <div>
                        <a href="login.php">Iniciar sesion</a>
                    </div>
                </div>

            </form>


        </div>

        <div class="welcome-screen-container">
            <img src="img/logini.jpg" alt="">
        </div>
    </div>

</body>
</html>