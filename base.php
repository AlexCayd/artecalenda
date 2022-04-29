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
<body onload="CarritoAlmancenado()">
    <header class="header header-catalogo">
        <div class="header__barra contenedor">
            <div class="header__logo">
                <p class="header__logo-texto">Arte Calenda</p>
            </div>
    
            <nav class="navegacion">
                <a href="index.html" class="navegacion__enlace">Inicio</a>
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
                        <button id="Carrito" class="carrito__boton" onclick="guardarLocalStorage()"> <a href="pago.html">Pasar a checkout</a></button>
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