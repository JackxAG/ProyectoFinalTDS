<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <header>
        <div class="logo">
        <img src="images/LOGO.png" style="width: 200px; height: auto;" alt="tenedor Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Iniciar sesión</a></li>
                <li><a href="register.php">Registrarse</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="post" action="includes/login.php" autocomplete="off">
            <div class="input-group">
                <h2>Iniciar Sesión</h2>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <input name="login" type="submit" class="btn" value="Iniciar Sesión">
            </div>
        </form>
    </main>
</body>

</html>