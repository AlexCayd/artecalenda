

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Festive&family=Poppins:wght@400;700&display=swap');

body {
  font-family: 'Poppins', sans-serif;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f07167;
  padding: 25px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin-top: 35px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  background-color: #fed9b7;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-family: inherit;
  font-size: 20px;
}

input[type=text]:focus {
  background-color: #fed9b7;
  outline: none;
}

label {
  margin-bottom: 10px;
  display: block;
  color: #fdfcdc;
  font-size: 22px;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #fdfcdc;
  color: #f07167;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 18px;
  font-family: inherit;
  font-weight: bold;
  transition: background-color .4s;
}

.btn:hover {
  background-color: #fed9b7;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: #fdfcdc;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

h3 {
  font-size: 26px;
  color: #fdfcdc;
}

h4,
h4 span {
  font-size: 22px;
  color: #fdfcdc;
}
</style>
</head>
<body onload="crearElemento(); contenedorPrecio();">

  <header class="header header-catalogo">
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

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row" >
          <div class="col-50">
            <h3>Checkout</h3>
            <label for="fname"><i class="fa fa-user"></i> Nombre Completo</label>
            <input type="text" id="fname" name="firstname" placeholder="Maria Pérez Velazquez" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="juan@ejemplo.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Direccion</label>
            <input type="text" id="adr" name="address" placeholder="1658 Mueller Rapid Suite 534 - Waterloo, WI / 22041" required>
            <label for="city"><i class="fa fa-institution"></i> Ciudad</label>
            <input type="text" id="city" name="city" placeholder="Ciudad de México" required>

            <div class="row">
              <div class="col-50">
                <label for="state">Estado</label>
                <input type="text" id="state" name="state" placeholder="Chiapas" required>
              </div>
              <div class="col-50">
                <label for="zip">Código Postal</label>
                <input type="text" id="zip" name="zip" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Método de Pago</h3>
            <label for="fname">Aceptamos Tarjetas</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Titular de tarjeta</label>
            <input type="text" id="cname" name="cardname" placeholder="Maria Pérez Velazquez" required>
            <label for="ccnum">Numero de tarjeta</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Mes Exp</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Septiembre" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Año Exp</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required> 
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Dirección de envío igual que facturación
        </label>
        <input type="submit" value="Continuar checkout" class="btn">
    </form>
   <a href="catalogo.php" class="btn" style="display: block; width: 100%; text-align: center; text-decoration: none;">Regresar al catálogo</a>
    
  </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Carrito <span class="price" id="contenedorPrecio"><i class="fa fa-shopping-cart"></i>  </span></h4>
    
      <div id="contenedorprod">
      
          
      </div>
      <br>
      <p>Total a pagar <span class="price" id="contenedorTotal" style="color:black"></span></p>
    </div>
  </div>
</div>

<script src="app.js"></script>
</body>
</html>