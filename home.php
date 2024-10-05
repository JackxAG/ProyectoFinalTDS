<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/BENDITO-LOGO2.png" alt="Tenedor Logo">
        </div>
        <nav>
        <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li><a href="reservations.php">Reservas</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section class="menu-section">
        <h1>MENÚ</h1>
        <p>La misión es simple: servir platos deliciosos y asequibles que los invitados querrán volver a comer semana tras semana.</p>
    </section>
    <section class="welcome-section">
        <h2>Bienvendios a Endless Restaurant</h2>
        <p>Endless Restaurant es una plataforma creada con el fin de poder reaizar reservas en nuestro restaurante.  Aquí podrás encontrar información sobre nuestros platos, precios y horarios de atención.</p>

    </section>
    <section class="pizza-gallery-section">
        <h2>Nuestras Pizzas</h2>
        <div class="pizza-gallery">
            <div class="pizza-item">
                <img src="https://www.stefanofaita.com/wp-content/uploads/2022/04/pizzamargherita1-1200x900.jpg" alt="Pizza Margherita">
                <div class="pizza-info">
                    <h3>Pizza Margherita</h3>
                    <p>La clásica Pizza Margherita, hecha con salsa de tomate fresca, mozzarella y albahaca. Perfecta para los amantes de los sabores tradicionales.</p>
                </div>
            </div>
            <div class="pizza-item">
                <img src="https://www.simplyrecipes.com/thmb/KE6iMblr3R2Db6oE8HdyVsFSj2A=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2019__09__easy-pepperoni-pizza-lead-3-1024x682-583b275444104ef189d693a64df625da.jpg" alt="Pizza Pepperoni">
                <div class="pizza-info">
                    <h3>Pizza Pepperoni</h3>
                    <p>Deliciosa Pizza Pepperoni con generosas porciones de pepperoni y queso mozzarella, horneada a la perfección.</p>
                </div>
            </div>
            <div class="pizza-item">
                <img src="https://www.paulinacocina.net/wp-content/uploads/2023/11/como-hacer-pizza-hawaiana-Paulina-Cocina-Recetas.jpg" alt="Pizza Hawaiana">
                <div class="pizza-info">
                    <h3>Pizza Hawaiana</h3>
                    <p>Una combinación dulce y salada de piña fresca y jamón sobre una base de salsa de tomate y queso mozzarella.</p>
                </div>
            </div>
            <div class="pizza-item">
                <img src="https://www.institucionalcolombia.com/wp-content/uploads/2023/01/Pizza_vegetariana.jpg" alt="Pizza Vegetariana">
                <div class="pizza-info">
                    <h3>Pizza Vegetariana</h3>
                    <p>Nuestra Pizza Vegetariana está hecha con los ingredientes más frescos, incluyendo pimientos, cebollas, champiñones y tomates cherry.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
