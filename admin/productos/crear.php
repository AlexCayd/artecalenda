<?php 
    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Consultar para obtener las categorias
    $consulta = "SELECT * FROM categorias";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];

    $nombre = '';
    $precio = '';
    $descripcion = '';
    $stock = '';
    $categoriaId = '';

    // Ejecutar cuando el usuario envía el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
        $stock = mysqli_real_escape_string($db, $_POST['stock']);
        $categoriaId = mysqli_real_escape_string($db, $_POST['categoria']);

        // Asignar files a una variable
        $imagen = $_FILES['imagen'];

        if(!$nombre) {
            $errores[] = "Debes añadir un nombre";
        }

        if(!$precio) {
            $errores[] = "Debes añadir un precio";
        }

        if(strlen($descripcion) < 50) {
            $errores[] = "La descripción debe tener al menos 50 caracteres";
        }

        if(!$stock) {
            $errores[] = "Debes añadir el stock";
        }

        if(!$categoriaId) {
            $errores[] = "Debes seleccionar una categoría";
        }

        if(!$imagen['name']) {
            $errores[] = "Debes añadir una imagen";
        }

        // Validar por tamaño
        if($imagen['size'] > 1000000) {
            $errores[] = "La imagen debe pesar menos de 1MB";
        }

        if(empty($errores)) {
            /** SUBIDA DE ARCHIVOS */
            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            // Generar un nombre único
            $nombreImagen = md5( uniqid('')) . ".jpg";

            // Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );
 
            // Insertar en la base de datos
            $query = "INSERT INTO productos (nombre, precio, imagen, descripcion, stock, categoriaId) VALUES ('$nombre', '$precio', '$nombreImagen', '$descripcion', '$stock', '$categoriaId')";
            // echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                // Redireccionar al usuario
                header('Location: /artecalendastack/admin?resultado=1');
            }
        }
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
    <link rel="stylesheet" href="../../styles.css">
</head>
<body onload="CarritoAlmancenado()">
    <header class="header header-catalogo">
        <div class="header__barra contenedor">
            <div class="header__logo">
                <p class="header__logo-texto">Arte Calenda</p>
            </div>
    
            <nav class="navegacion">
                <a href="../../index.php" class="navegacion__enlace">Inicio</a>
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
                <a href="../../catalogo.php" class="navegacion__enlace">Catálogo</a>
                <a href="../../turismo.php" class="navegacion__enlace">Turismo</a>
                <a href="../../nosotros.php" class="navegacion__enlace">Nosotros</a>
            </nav>
        </div>

        <div class="header__slogan">
            <h1 class="header__slogan-texto">Agregar Producto</h1>
        </div>
    </header>

    <main class="admin contenedor" style="margin-top: 50px;">
        <a href="/artecalendaStack/admin/" class="destacados__boton">Volver al panel de Administración</a>

        <div class="alertas-contenedor">
            <?php foreach($errores as $error): ?>
                <p class="alerta error"><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>

        <form class="formulario" method="POST" enctype="multipart/form-data" action="http://localhost/artecalendaStack/admin/?resultado=1">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto" maxlength="40" value="<?php echo $nombre; ?>" required>

            <label for="precio">Precio:</label>
            <input type="decimal" id="precio" name="precio" placeholder="Precio del producto" max="999.99" step=".01" value="<?php echo $precio; ?>" required>

            <label for="descripcion">Descripción: </label>
            <textarea id="descripcion" name="descripcion" placeholder="Descripción del producto" maxlength="200" required><?php echo $descripcion; ?></textarea>

            <label for="stock">Número en stock: </label>
            <input type="number" id="stock" name="stock" placeholder="Número de productos en stock" maxlength="3" value="<?php echo $stock; ?>" required> 

            <label for="categorias">Categoría del producto: </label>
            <select name="categoria">
                <option value="">Seleccione una categoría</option>
                <?php while($categoria = mysqli_fetch_assoc($resultado)): ?>
                    <option <?php echo $categoriaId === $categoria['id'] ? 'selected' : ''; ?> value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
                <?php endwhile ?>
            </select>

            <label for="imagen">Imagen del producto: </label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png" required>

            <input type="submit" value="Agregar producto" class="destacados__boton formulario__submit" style="margin: 50px auto 25px auto; width: 50%; padding: 15px; font-weight: bold;">
        </form>
    </main>

    <script src="app.js"></script>
</body>
</html>