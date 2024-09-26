<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/register.css">
    
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/LOGO.png" alt="tenedor Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Iniciar sesión</a></li>
                <li><a href="register.php">Registrarse</a></li>
            </ul>
        </nav>
    </header>
    <form class="formregister" method="post" action="includes/send.php" autocomplete="off">
        <div class="input-group">
            <h2>Registrarse</h2>
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Contraseña" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-container">
                <input type="email" name="email" placeholder="Correo" required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <input type="tel" name="phone" placeholder="Teléfono" required>
                <i class="fa-solid fa-phone"></i>
            </div>
        
            <input name="send" type="submit" class="btn" value="Registrarse">
        </div>
    </form>

</body>
</html>
