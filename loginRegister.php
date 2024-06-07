<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion - Barberia PI</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="loginRegisterEstilos.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="caja">
            <h1><img src="imagenes/logo.png"></h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="productos.html">Servicios</a></li>
                    <li><a href="contacto.html">Reserva</a></li>
                    <li><a href="ventas.html">Productos</a></li>
                    <?php if(isset($_SESSION['usuario'])): ?>
                        <li><a href="#">Bienvenido, <?php echo $_SESSION['usuario']; ?></a></li>
                        <li><a href="logout.php">Cerrar Sesión</a></li>
                    <?php else: ?>
                        <li><a href="#" class="open-modal" data-open="loginModal">Iniciar Sesión</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name ="correo">
                    <input type="password" placeholder="Contraseña" name ="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="registro_usuario_be.php" method="POST" class="formulario__register" onsubmit="return validatePasswords();">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena">
                    <input type="password" placeholder="Confirmar Contraseña" name="confirmar_contrasena" id="confirmar_contrasena">
                    <p id="error-message" style="color: red; display: none;">Las contraseñas no coinciden</p>
                    <button type="submit">Regístrarse</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <img src="imagenes/logo-blanco.png">
        <p class="copyright"> Mira nuestras estadisticas aqui -> <a href="estadisticas.html">Estadisticas</a></p>
        <p class="copyright">&copy Copyright Barbería PI - 2024</p>
    </footer>
    <script src="loginRegister.js"></script>
</body>
</html>
