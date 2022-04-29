<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arte Calenda</title>
    <link rel="icon" href="img/logo.jpg">
    <link rel="stylesheet" href="styles.css">
</head>
<body onload="CarritoAlmancenado()"></body>
    <header class="header header-catalogo">
        <div class="header__barra contenedor">
            <div class="header__logo">
                <p class="header__logo-texto">Arte Calenda</p>
            </div>
    
            <nav class="navegacion">
                <a class="header__carrito" href="#" class="navegacion__enlace">Inicio</a>
                <div class="submenu">
                    <a href="#" id="img-carrito">Carrito de Compras</a>
                    <div id="carrito">
                            
                            <table id="lista-carrito" class="u-full-width">
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

                            <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                    </div>
                </div>
                <a href="catalogo.html" class="navegacion__enlace">Catálogo</a>
                <a href="turismo.html" class="navegacion__enlace">Turismo</a>
                <a href="nosotros.html" class="navegacion__enlace">Nosotros</a>
            </nav>
        </div>

        <div class="header__slogan">
            <h1 class="header__slogan-texto">Los Mejores Productos</h1>
        </div>
    </header>


    <script src="app.js"></script>
</body>
</html>