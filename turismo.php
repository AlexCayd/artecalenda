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
    <header class="header header-turismo">
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
            <h1 class="header__slogan-texto">Visítanos en Oaxaca</h1>
        </div>
    </header>

    <main class="visitamensaje contenedor">
        <h2 class="heading">Visita nuestra tienda física en Oaxaca</h2>
        <p class="visitamensaje__mensaje">Nuestra empresa se dedica a comercializar productos artesanales provenientes de Oaxaca, de una amplia gama de colores, texturas, etc.</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.5862678941653!2d-96.72941387839163!3d17.07992545271004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c7221f14c1218d%3A0xb133e8aea9935fb6!2sRevoluci%C3%B3n%20110%2C%20Aurora%2C%2068045%20Oaxaca%20de%20Ju%C3%A1rez%2C%20Oax.!5e0!3m2!1ses-419!2smx!4v1645237537033!5m2!1ses-419!2smx" width="100%" height="300" style="border: 10px solid var(--rosa);" allowfullscreen="" loading="lazy"></iframe>
    </main>

    <section class="turismo">
        <div class="contenedor">
            <div class="turismo__texto">
                <h2 class="heading">Visítanos en Oaxaca</h2>
                <div class="turismo__galeria">
                    <div class="turismo__imagen">
                        <img loading="lazy" src="img/galeria1.jpg" alt="Imagen de Turismo">
                    </div>

                    <div class="turismo__imagen">
                        <img loading="lazy" src="img/galeria2.jpg" alt="Imagen de Turismo">
                    </div>

                    <div class="turismo__imagen">
                        <img loading="lazy" src="img/galeria3.jpg" alt="Imagen de Turismo">
                    </div>

                    <div class="turismo__imagen">
                        <img loading="lazy" src="img/galeria9.jpg" alt="Imagen de Turismo">
                    </div>
                    
                    <div class="turismo__imagen">
                        <img loading="lazy" src="img/galeria6.jpg" alt="Imagen de Turismo">
                    </div>
                    
                    <div class="turismo__imagen">
                        <img loading="lazy" src="img/galeria5.jpg" alt="Imagen de Turismo">
                    </div>

                    <div class="turismo__imagen">
                        <img loading="lazy" src="img/galeria7.jpg" alt="Imagen de Turismo">
                    </div>

                    <div class="turismo__imagen">
                        <img loading="lazy" src="img/galeria4.jpg" alt="Imagen de Turismo">
                    </div>

                    <div class="turismo__imagen">
                        <img loading="lazy" src="img/galeria8.jpg" alt="Imagen de Turismo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mexicano">
        <div class="mexicano__grid">
            <div class="mexicano__imagen"></div>
            <div class="mexicano__texto">
                <h2 class="heading">Somos Orgullosamente Mexicanos</h2>
                <p>Nuestra empresa busca promover el comercio local a través de este proyecto, ya que así podremos mostrar la mercancía producida por Oaxaca y comercializarla para poner en alto el orgullo mexicano.</p>
                <a href="catalogo.html" class="mexicano__boton">Compra en Arte Calenda</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p class="footer__copyright">Arte Calenda &copy;. Todos los derechos reservados</p>
    </footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="app.js"></script>
</body>
</html>