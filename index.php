<!DOCTYPE html>

<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width"> 
        <title>Barbería PI</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    </head>

    <body>
        <?php include 'check_session.php';?> <!-- Aquí se incluye la verificación de sesión -->
        
        <header>
        <div class="caja">
            <div class="logo">
                <h1><img src="imagenes/logo.png" alt="Logo"></h1>
            </div>
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
        <img class="banner" src="banner/banner.jpg">
        
        <main>
            <section class="principal">

                <h2 class="titulo-principal">Sobre la Barbería Alura</h2>

                <img class="utensilios"  src="imagenes/utensilios.jpg" alt="Utensilios de un barbero.">
    
                <p>Ubicada en el corazón de la ciudad, la <strong>Barbería Alura</strong> trae para el mercado lo que hay de mejor para su cabello y barba. Fundada en 2020, la Barbería Alura ya es destaque en la ciudad y conquista nuevos clientes diariamente.</p>
    
                <p id="mision"><em>Nuestra misión es: <strong>"Proporcionar autoestima y calidad de vida a nuestros clientes"</strong>.</em></p>
    
                <p>Ofrecemos profesionales experimentados que están constantemente observando los cambios y movimiento en el mundo de la moda, para así ofrecer a nuestros clientes las últimas tendencias. El atendimiento posee un padrón de excelencia y agilidad, garantizando calidad y satisfacción de nuestros clientes.</p> 
    
            </section>

            <section class="mapa">
                <h3 class="titulo-principal">Nuestra Ubicación</h3>
                <p>Nuestro establecimiento está ubicado en el corazón de la ciudad</p>

                <div class="mapa-contenido">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.883546775674!2d-74.07651622416357!3d4.614853142394028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f999ce316530f%3A0xb262e8596b0e1904!2sFundaci%C3%B3n%20Universitaria%20San%20Mateo!5e0!3m2!1ses-419!2sco!4v1711402471183!5m2!1ses-419!2sco" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


            </section>
            
            <section class="diferenciales">
    
                <h3 class="titulo-principal">Diferenciales</h3>
            
                <div class="contenido-diferenciales">
                    <ul class="lista-diferenciales">
                        <li class="items">Atención personalizada a los clientes</li>
                        <li class="items">Espacio diferenciado</li>
                        <li class="items">Localización</li>
                        <li class="items">Profesionales calificados</li>
                        <li class="items">Puntualidad</li>
                        <li class="items">Limpieza</li>
                    </ul><img src="diferenciales/diferenciales.jpg" class="imagen-diferenciales">
                </div>
                <div class="video">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/wcVVXUV0YUY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
            </section>
            
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

