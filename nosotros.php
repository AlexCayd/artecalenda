<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arte Calenda</title>
    <link rel="icon" href="img/logo.jpg">
    <link rel="stylesheet" href="styles.css" id="modifiedstyles">
</head>
<body onload="CarritoAlmancenado()"></body>
    <header class="header header-nosotros">
        <div class="header__barra contenedor">
            <div class="header__logo">
                <p class="header__logo-texto">Arte Calenda</p>
            </div>
    
            <nav class="navegacion">
                <a href="index.php" class="navegacion__enlace">Inicio</a>
                <div class="submenu">
                    <a class="header__carrito" href="#" id="img-carrito">Carrito de Compras</a>
                    <div id="carrito">
                            
                        <table id="lista-carrito" style="width: 100%;" class="lista-carrito">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>

                        <button id="vaciar-carrito" class="carrito__boton">Vaciar Carrito</button>
                        <button id="Carrito" class="carrito__boton" onclick="guardarLocalStorage()"> <a href="pago.php">Pasar a checkout</a></button>
                           
                    </div>
                </div>
                    <a href="catalogo.php" class="navegacion__enlace">Catálogo</a>
                    <a href="turismo.php" class="navegacion__enlace">Turismo</a>
                    <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                </nav>
            </div>
    
            <div class="header__slogan">
                <h1 class="header__slogan-texto">Los Mejores Productos</h1>
            </div>
        </header>
    
        <section class="horario padding contenedor">
            <h2 class="heading">Nuestros Horarios</h2>
            <p class="horario__texto">Visita nuestra tienda física en los siguientes horarios</p>
            <div class="horario__grid">
                <div class="horario__contenido">
                    <table class="tabla">
                        <thead class="tabla__thead">
                            <tr>
                                <th class="tabla__th">Día</th>
                                <th class="tabla__th">De</th>
                                <th class="tabla__th">Hasta</th>
                            </tr>
                        </thead>
                        <tbody class="tabla__tbody">
                            <tr class="tabla__tr">
                                <td class="tabla__td">Lunes</td>
                                <td class="tabla__td">09:00</td>
                                <td class="tabla__td">19:00</td>
                            </tr>
    
                            <tr class="tabla__tr">
                                <td class="tabla__td">Martes</td>
                                <td class="tabla__td">09:00</td>
                                <td class="tabla__td">19:00</td>
                            </tr>
    
                            <tr class="tabla__tr">
                                <td class="tabla__td">Miércoles</td>
                                <td class="tabla__td">09:00</td>
                                <td class="tabla__td">19:00</td>
                            </tr>
    
                            <tr class="tabla__tr">
                                <td class="tabla__td">Jueves</td>
                                <td class="tabla__td">09:00</td>
                                <td class="tabla__td">19:00</td>
                            </tr>
    
                            <tr class="tabla__tr">
                                <td class="tabla__td">Viernes</td>
                                <td class="tabla__td">09:00</td>
                                <td class="tabla__td">19:00</td>
                            </tr>
    
                            <tr class="tabla__tr">
                                <td class="tabla__td">Sábado</td>
                                <td class="tabla__td">09:00</td>
                                <td class="tabla__td">19:00</td>
                            </tr>
    
                            <tr class="tabla__tr">
                                <td class="tabla__td">Domingo</td>
                                <td class="tabla__td" colspan="2">Cerrado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
                <div class="horarios__icono">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
        </section>
    
        <section class="nosotros">
            <div class="nosotros__contenedor">
                <div class="nosotros__texto">
                    <h2 class="heading heading-centrado">¿Por qué elegir a Arte Calenda?</h2>
                    <p class="nosotros__descripcion">Somos una empresa dedicada a la venta de ropa artesanal, con más de 20 años de experiencia en el mercado, ofreciendo una amplia gama de productos de calidad, con una amplia variedad de colores y diseños.</p>
                </div>
            </div>
        </section>
    
        <main class="visitamensaje contenedor">
            <h2 class="heading">Visita nuestra tienda física en Oaxaca</h2>
            <p class="visitamensaje__mensaje">Nuestra empresa se dedica a comercializar productos artesanales provenientes de Oaxaca, de una amplia gama de colores, texturas, etc.<br>
            Nuestro compromiso es ofrecer productos de la mejor calidad.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.5862678941653!2d-96.72941387839163!3d17.07992545271004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c7221f14c1218d%3A0xb133e8aea9935fb6!2sRevoluci%C3%B3n%20110%2C%20Aurora%2C%2068045%20Oaxaca%20de%20Ju%C3%A1rez%2C%20Oax.!5e0!3m2!1ses-419!2smx!4v1645237537033!5m2!1ses-419!2smx" width="100%" height="300" style="border: 10px solid var(--rosa);" allowfullscreen="" loading="lazy"></iframe>
        </main>
    
        <section class="sociales padding">
            <div class="contenedor">
                <h2 class="heading">Síguenos en nuestras redes sociales</h2>
                <div class="sociales__redes">
                    <a href="https://www.facebook.com" target="#" class="sociales__redes-enlace">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com" target="#" class="sociales__redes-enlace">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com" target="#" class="sociales__redes-enlace">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </section>
    
        <footer class="footer">
            <p class="footer__copyright">Arte Calenda &copy;. Todos los derechos reservados</p>
        </footer>

    <script src="app.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/5bb4703aed.js" crossorigin="anonymous"></script>
</body>
</html>