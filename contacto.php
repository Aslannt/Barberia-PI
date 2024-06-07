<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contacto - Barbería PI</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <header>
            <div class="caja">
                <h1><img src="imagenes/logo.png" alt="Logo de la Barbería Alura"></h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="productos.php">Servicios</a></li>
                        <li><a href="contacto.php">Reserva</a></li>
                        <li><a href="ventas.php">Productos</a></li>
                        <?php if(isset($_SESSION['usuario'])): ?>
                            <li><a href="#">Bienvenido, <?php echo $_SESSION['usuario']; ?></a></li>
                            <li><a href="logout.php">Cerrar Sesión</a></li>
                        <?php else: ?>
                            <li><a href="loginRegister.php">Iniciar Sesión</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="reserva-main">
                <form action="formulario.php" method="post">

                    <label for="nombreapellido">Nombre y Apellido</label>
                    <input type="text" id="nombreapellido" name="nombreapellido" required>
                
                    <label for="correoelectronico">Correo Electrónico</label>
                    <input type="email" id="correoelectronico" name="correoelectronico" required>
                
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" required>
                
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
                
                <fieldset>
                    <legend>¿Cómo le gustaría que lo contactemos?</legend>

                    <label for="radio-email"><input type="radio" name="contacto" value="email" id="radio-email">Email</label>
                    
                    <label for="radio-telefono"><input type="radio" name="contacto" value="telefono" id="radio-telefono">Teléfono</label>
                    
                    <label for="radio-whatsapp"><input type="radio" name="contacto" value="whatsapp" id="radio-whatsapp" checked>WhatsApp</label>
                    
                </fieldset>
               
                <fieldset>
                    <legend>¿En cuál horario prefiere ser atendido?</legend>
                    <select>
                        <option>Mañana</option>
                        <option>Tarde</option>
                        <option>Noche</option>
                    </select>
                </fieldset>
                
                <label class="checkbox"><input type="checkbox" checked>¿Le gustaría recibir novedades de la Barbería Alura?</label>                
                
                <input type="submit" value="Enviar formulario">
        </form>
        </main>


    <footer>
        <img src="imagenes/logo-blanco.png">
        <p class="copyright">Mira nuestras estadísticas aquí -> <a href="estadisticas.html">Estadísticas</a></p>
        <p>&copy Copyright Barbería PI - 2024</p>
    </footer>
</body>
</html>