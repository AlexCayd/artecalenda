<?php
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
    <header class="header header-catalogo">
        <div class="header__barra contenedor">
            <div class="header__logo">
                <p class="header__logo-texto">Arte Calenda</p>
            </div>
    
            <nav class="navegacion">
                <a href="index.php" class="navegacion__enlace">Inicio</a>
                <div class="submenu">
                    <a class="header__carrito" href="#" id="img-carrito">Carrito de Compras</a>
                    <div id="carrito" >
                            
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

    <section class="populares contenedor">
        <h2 class="heading">Productos Populares</h2>
        <div class="populares__grid">
            <div class="popular">
                <div class="popular__mask">
                    <img src="img/accesorio7.jpg" alt="Imagen destacada" class="popular__imagen">
                </div>
                <div class="popular__texto">
                    <h3 class="popular__titulo">Sudadera de jerga</h3>
                    <p class="popular__precio">$400</p>
                </div>
            </div>

            <div class="popular">
                <div class="popular__mask">
                    <img src="img/vestido6.jpg" alt="Imagen destacada" class="popular__imagen">
                </div>
                <div class="popular__texto">
                    <h3 class="popular__titulo">Vestido morado</h3>
                    <p class="popular__precio">$520</p>
                </div>
            </div>

            <div class="popular">
                <div class="popular__mask">
                    <img src="img/accesorio3.jpg" alt="Imagen destacada" class="popular__imagen">
                </div>
                <div class="popular__texto">
                    <h3 class="popular__titulo">Sombrero típico multicolor</h3>
                    <p class="popular__precio">$280</p>
                </div>
            </div>

            <div class="popular">
                <div class="popular__mask">
                    <img src="img/guayabera1.jpg" alt="Imagen destacada" class="popular__imagen">
                </div>
                <div class="popular__texto">
                    <h3 class="popular__titulo">Guayabera blanca de diseño artesanal</h3>
                    <p class="popular__precio">$800</p>
                </div>
            </div>
        </div>
    </section>

    <section class="nuevos contenedor">
        <h2 class="heading">Productos Nuevos</h2>
        <div class="nuevos__grid">
            <div class="nuevo">
                <div class="nuevo__mask">
                    <img src="img/guayabera1.jpg" alt="Imagen destacada" class="nuevo__imagen">
                </div>
                <div class="nuevo__texto">
                    <h3 class="nuevo__titulo">Guayabera blanca de diseño artesanal</h3>
                    <p class="nuevo__precio">$800</p>
                </div>
            </div>

            <div class="nuevo">
                <div class="nuevo__mask">
                    <img src="img/guayabera4.jpg" alt="Imagen destacada" class="nuevo__imagen">
                </div>
                <div class="nuevo__texto">
                    <h3 class="nuevo__titulo">Guayabera moderna lisa obscura</h3>
                    <p class="nuevo__precio">$600</p>
                </div>
            </div>

            <div class="nuevo">
                <div class="nuevo__mask">
                    <img src="img/vestido2.jpg" alt="Imagen destacada" class="nuevo__imagen">
                </div>
                <div class="nuevo__texto">
                    <h3 class="nuevo__titulo">Vestido típico multicolor</h3>
                    <p class="nuevo__precio">$680</p>
                </div>
            </div>

            <div class="nuevo">
                <div class="nuevo__mask">
                    <img src="img/vestido6.jpg" alt="Imagen destacada" class="nuevo__imagen">
                </div>
                <div class="nuevo__texto">
                    <h3 class="nuevo__titulo">Vestido morado</h3>
                    <p class="nuevo__precio">$520</p>
                </div>
            </div>
        </div>
    </section>

    <section class="instrucciones">
        <div class="instrucciones__contenido">
            <h2 class="heading">Instrucciones para comprar</h2>
            <p class="instrucciones__texto">Haz click en cualquiera de los productos para ver más sobre ellos, agrégalos al carrito y finaliza la compra</p>
        </div>
    </section>

    <main class="todos">
        <?php 
            $limite = 3;
            require 'productos.php';
        ?>
    </main>

    <footer class="footer">
        <p class="footer__copyright">Arte Calenda &copy;. Todos los derechos reservados</p>
    </footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="app.js"></script>
</body>
</html>