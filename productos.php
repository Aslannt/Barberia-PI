<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Productos - Barbería PI</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="caja">
                <h1><img src="imagenes/logo.png"></h1>
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

        <main>
            <ul class="productos">
                <li>
                    <h2>Cabello</h2>
                    <img src="imagenes/cabello.jpg">
                    <p class="producto-descripcion">Con tijera o máquina, a gusto del cliente</p>
                    <p class="producto-precio">$ 10.000</p>
                </li>
                <li>
                    <h2>Barba</h2>
                    <img src="imagenes/barba.jpg">
                    <p class="producto-descripcion">Corte y diseño profesional de barba</p>
                    <p class="producto-precio">$ 07.000</p>
                </li>
                <li>
                    <h2>Cabello + Barba</h2>
                    <img src="imagenes/cabello+barba.jpg">
                    <p class="producto-descripcion">Paquete completo de cabello y barba</p>
                    <p class="producto-precio">$ 15.000</p>
                </li>
                <li>
                    <h2>Alisado</h2>
                    <img src="imagenes/alisado.jpg">
                    <p class="producto-descripcion">Suaviza el cabello, reduciendo el frizz y aportando brillo.</p>
                    <p class="producto-precio">$ 15.000</p>
                </li>
                <li>
                    <h2>Tinturado</h2>
                    <img src="imagenes/tintura.png">
                    <p class="producto-descripcion">Cambia el color del cabello de manera rapida y segura.</p>
                    <p class="producto-precio">$ 25.000</p>
                </li>
                <li>
                    <h2>Masaje Facial</h2>
                    <img src="imagenes/facial.jpg">
                    <p class="producto-descripcion">Protege la piel del sol, manteniéndola saludable y brillante.</p>
                    <p class="producto-precio">$ 13.000</p>
                </li>
            </ul>

        </main>

        <footer>
            <img src="imagenes/logo-blanco.png">
            <p class="copyright"> Mira nuestras estadisticas aqui -> <a href="estadisticas.html">Estadisticas</a></p>
            <p class="copyright">&copy Copyright Barbería PI - 2024</p>
        </footer>

        <script src="script.js"></script>
        <script src="modal.js"></script>


    </body>
</html>