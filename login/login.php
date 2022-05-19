



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nutricion</title>
</head>
<body>
    
    <div class="form-container">
        <div class="login-container">
            <h2>Bienvenidos</h2>
            <p>Selecciona el método de autenticación</p>

            <form action="loginc.php" name="loginc" method="POST">
                <p>
                    <label for="name">Nombre o correo</label>
                    <input class="input" type="text" name="name" id="name">
                </p>

                <p>
                    <label for="password">Contraseña</label>
                    <input class="input" type="password" name="password" id="password">
                </p>

                <div class="options">
                    <div>
                        Recordarme <input type="checkbox" name="rememberme" id="rememberme">
                    </div>
                    <div>
                        <a href="#">I forgot my password</a>
                    </div>
                </div>

                <p>
                    <input type="submit" class="btn btn-login" value="Log in">
                </p>

                <div class="provider">
                    <span>¿No tienes cuenta para iniciar sesion?</span>
                    <a href="registro.php">Registrate Ahora...</a>
                </div>

            </form>


        </div>

        <div class="welcome-screen-container">
            <img src="img/logini.jpg" alt="">
        </div>
    </div>

</body>
</html>