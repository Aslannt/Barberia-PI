<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ventas - Barbería PI</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para la página de ventas */
      .ventas-logo {
            margin-left: -110px; /* Ajusta este valor según sea necesario */
        }
    </style>
</head>
<body class="ventas-page">
    <header>
        
        <div class="caja">
            <h1><img src="imagenes/logo.png" class="ventas-logo"></h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="productos.html">Servicios</a></li>
                    <li><a href="contacto.html">Reserva</a></li>
                    <li><a href="ventas.html">Productos</a></li>
                    <li><a href="loginRegister.php">Iniciar Sesión</a></li>
                    <li><a href="#" id="carrito-boton">Carrito</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="cart-modal" class="cart-modal">
        <h2>Carrito</h2>
        <ul id="cart-items"></ul>
        <p>Total: $<span id="cart-total">0.00</span></p>
        <button id="checkout-button">Finalizar Compra</button>
    </div>

    <main>
        <div id="mensajeEmergente"></div>
        <div id="margenesVentas">
            <ul class="productos">
                <li>
                    <h2>Cera</h2>
                    <img class="imagenesVentas" src="imagenes/ceraCabello.png">
                    <p class="producto-descripcion">Ideal para peinados modernos y desenfadados. Da forma y definición al cabello.</p>
                    <p class="producto-precio">$ 10.00</p>
                    <button class="add-button" data-title="Cera" data-price="10.00">Añadir al Carrito</button>
                    <div class="mensaje-emergente" style="display:none;">Añadiste Cera al carrito</div>
                </li>
                <li>
                    <h2>Minoxidil</h2>
                    <img class="imagenesVentas" src="imagenes/minoxidil.webp">
                    <p class="producto-descripcion">Estimula el crecimiento capilar y fortalece el cabello.</p><br><br>
                    <p class="producto-precio">$ 08.00</p>
                    <button class="add-button" data-title="Minoxidil" data-price="08.00">Añadir al Carrito</button>
                    <div class="mensaje-emergente" style="display:none;">Añadiste Cera al carrito</div>
                </li>
                <li>
                    <h2>Shampoo</h2>
                    <img class="imagenesVentas" src="imagenes/shampoo.webp">
                    <p class="producto-descripcion">Limpia y refresca el cabello.</p><br><br><br>
                    <p class="producto-precio">$ 15.00</p>
                    <button class="add-button" data-title="Shampoo" data-price="15.00">Añadir al Carrito</button>
                    <div class="mensaje-emergente" style="display:none;">Añadiste Cera al carrito</div>
                </li>
                <li>
                    <h2>Dermarroler</h2>
                    <img class="imagenesVentas" src="imagenes/dermarroler.png">
                    <p class="producto-descripcion">Estimula colágeno, reduce arrugas y cicatrices. Ideal para utilizar con piel y cabello.</p><br><br><br>
                    <p class="producto-precio">$ 15.00</p>
                    <button class="add-button" data-title="Dermarroler" data-price="15.00">Añadir al Carrito</button>
                    <div class="mensaje-emergente" style="display:none;">Añadiste Cera al carrito</div>
                </li>
                <li>
                    <h2>Tonico Para Barba</h2>
                    <img class="imagenesVentas" id="tonicoBarba" src="imagenes/tonicoBarba.webp">
                    <p class="producto-descripcion">Estimula crecimiento, hidrata y previene picazón. ¡Barba más fuerte.</p>
                    <p class="producto-precio">$ 15.00</p>
                    <button class="add-button" data-title="tonicoBarba" data-price="15.00">Añadir al Carrito</button>
                    <div class="mensaje-emergente" style="display:none;">Añadiste Cera al carrito</div>
                </li>
                <li>
                    <h2>Fortalecedor Capilar</h2>
                    <img class="imagenesVentas" src="imagenes/fortalecedorCapilar.webp">
                    <p class="producto-descripcion">Previene caída, engrosa y mejora la barba. ¡Cabello más sano.</p>
                    <p class="producto-precio">$ 15.00</p>
                    <button class="add-button" data-title="Fortalecedor" data-price="15.00">Añadir al Carrito</button>
                    <div class="mensaje-emergente" style="display:none;">Añadiste Cera al carrito</div>
                </li>
            </ul>
        </div>
    </main>

    <footer>
        <img src="imagenes/logo-blanco.png">
        <p class="copyright"> Mira nuestras estadisticas aquí -> <a href="estadisticas.html">Estadisticas</a></p>
        <p class="copyright">&copy; Copyright Barbería PI - 2024</p>
    </footer>

    <script src="script.js" defer></script>
    <script src="modal.js"></script>
</body>
</html>
