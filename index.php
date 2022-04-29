<?php
    session_start();
    $auth=$_SESSION['login'];

    if ($auth) {
    } else {
        header("Location:login.php"); 
        echo "No estas autenticado";
    }
?>

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
<body onload="CarritoAlmancenado()">
    <header class="header header-index">
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
            <h1 class="header__slogan-texto">Ropa Artesanal de Calidad</h1>
        </div>
    </header>

    <main class="contenido-principal efecto-hoja categorias">
        <h2 class="heading">Visita las Categorías</h2>
        <div class="contenedor-categorias">
            <a href="#" class="categoria">
                <h2 class="categoria__texto">Guayaberas</h2>
            </a>

            <a href="#" class="categoria">
                <h2 class="categoria__texto">Vestidos</h2>
            </a>

            <a href="#" class="categoria">
                <h2 class="categoria__texto">Accesorios</h2>
            </a>
        </div>
    </main>

    <section class="efecto-hoja destacados">
        <h2 class="heading">Nuestros Productos Destacados</h2>
        <div class="destacados-grid">
            <a href="#" class="destacado">
                <div class="destacado__mask">
                    <img loading="lazy" src="img/guayabera1.jpg" alt="Imagen Destacada" class="destacado__imagen">
                </div>
                <div class="destacado__texto">
                    <p class="destacado__descripcion">Guayabera blanca de diseño artesanal</p>
                    <p class="destacado__precio">$800</p>
                </div>
            </a>

            <a href="#" class="destacado">
                <div class="destacado__mask">
                    <img loading="lazy" src="img/vestido1.jpg" alt="Imagen Destacada" class="destacado__imagen">
                </div>
                <div class="destacado__texto">
                    <p class="destacado__descripcion">Vestido con estampado floral</p>
                    <p class="destacado__precio">$950</p>
                </div>
            </a>

            <a href="#" class="destacado">
                <div class="destacado__mask">
                    <img loading="lazy" src="img/accesorio4.jpg" alt="Imagen Destacada" class="destacado__imagen">
                </div>
                <div class="destacado__texto">
                    <p class="destacado__descripcion">Pack 3 sombreros</p>
                    <p class="destacado__precio">$750</p>
                </div>
            </a>

            <a href="#" class="destacado">
                <div class="destacado__mask">
                    <img loading="lazy" src="img/accesorio8.jpg" alt="Imagen Destacada" class="destacado__imagen">
                </div>
                <div class="destacado__texto">
                    <p class="destacado__descripcion">Rebozo artesanal personalizado</p>
                    <p class="destacado__precio">$320</p>
                </div>
            </a>
        </div>
        <div class="destacados__contenedor-boton">
            <a href="catalogo.html" class="destacados__boton">Ver más productos</a>
        </div>
    </section>

    <section class="ofertas">
        <div class="ofertas__imagen"></div>
        <div class="ofertas__texto">
            <h2 class="heading">Aprovecha nuestras ofertas</h2>
            <a href="catalogo.html" class="ofertas__boton">Obtener Más Información</a>
        </div>
    </section>

    <section class="turismo efecto-hoja">
        <div class="turismo__contenedor">
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

    <section class="nosotros">
        <div class="nosotros__contenedor">
            <div class="nosotros__texto">
                <h2 class="heading heading-centrado">¿Por qué elegir a Arte Calenda?</h2>
                <p class="nosotros__descripcion">Somos una empresa dedicada a la venta de ropa artesanal, con más de 20 años de experiencia en el mercado, ofreciendo una amplia gama de productos de calidad, con una amplia variedad de colores y diseños.</p>
            </div>
        </div>
    </section>

    <section class="horario efecto-hoja">
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

    <footer class="footer">
        <p class="footer__copyright">Arte Calenda &copy;. Todos los derechos reservados</p>
    </footer>
    <script src="app.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/5bb4703aed.js" crossorigin="anonymous"></script>
</body>
</html>