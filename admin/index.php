<?php 
    session_start();
    $auth=$_SESSION['login'];

    if (!$auth) {
        header("Location:../login.php"); 
    }

    // Importar la conexión
    require '../includes/config/database.php';
    $db = conectarDB();

    // Escribir el query
    $query = "SELECT * FROM productos";

    // Consultar la BD
    $resultadoConsulta = mysqli_query($db, $query);

    // Consulta para verificar el mensaje
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {
            // Eliminar el archivo
            $query = "SELECT imagen FROM productos WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);
            $producto = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $producto['imagen']);


            // Eliminar la propiedad
            $query = "DELETE FROM productos WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('Location: /artecalendaStack/admin?resultado=3');
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
    <link rel="stylesheet" href="../styles.css">
</head>
<body onload="CarritoAlmancenado()">
    <header class="header header-catalogo">
        <div class="header__barra contenedor">
            <div class="header__logo">
                <p class="header__logo-texto">Arte Calenda</p>
            </div>
    
            <nav class="navegacion">
                <a href="../index.php" class="navegacion__enlace">Inicio</a>
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
                        <button id="Carrito" class="carrito__boton" onclick="guardarLocalStorage()"> <a href="../pago.php">Pasar a checkout</a></button>
                    </div>
                </div>
                <a href="../catalogo.php" class="navegacion__enlace">Catálogo</a>
                <a href="../turismo.php" class="navegacion__enlace">Turismo</a>
                <a href="../nosotros.php" class="navegacion__enlace">Nosotros</a>
            </nav>
        </div>

        <div class="header__slogan">
            <h1 class="header__slogan-texto">Panel de Administración</h1>
        </div>
    </header>

    <main class="admin contenedor" style="margin-top: 50px;">
        <a href="/artecalendaStack/admin/productos/crear.php" class="destacados__boton">Agregar Producto</a>
        
       <!-- Codigo para salir de sesion auth -->
        <?php
        if(array_key_exists('button1', $_POST)) {
            salirSesion();
        }
        function salirSesion(){
            session_destroy();
            header("Location:../login.php");
        }
        ?>
    <br>    
    <br>    
    <br>    
    <form action="" method="POST">

    <input type="submit" class="destacados__boton" name="button1" value="Salir de sesion" style="border:none; padding:1.5em; font-size:1rem"> </input>
    </form>
      
        <!-- Fin de codigo para terminar sesion -->
        <div class="alertas-contenedor">
            <?php if($resultado == 1) : ?>
                <p class="alerta creado">Producto creado correctamente</p>
            <?php elseif($resultado == 2) : ?>
                <p class="alerta editado">Producto actualizado correctamente</p>
            <?php elseif($resultado == 3): ?>
            <p class="alerta borrar">Producto eliminado correctamente</p>
            <?php endif; ?>
        </div>

        <table class="productos tabla">
            <thead class="tabla__thead">
                <th class="tabla__th">Nombre</th>
                <th class="tabla__th">Imagen</th>
                <th class="tabla__th">Precio</th>
                <th class="tabla__th">Stock</th>
                <th class="tabla__th">Acciones</th>
            </thead>

            <tbody>
                <?php while($producto = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr class="tabla__tr producto__tr">
                    <td class="tabla__td producto__td"> <?php echo $producto['nombre'] ?> </td>
                    <td class="tabla__td producto__td">
                        <img src="../imagenes/<?php echo $producto['imagen']; ?>" alt="Imagen de producto" class="productos-imagen">
                    </td>
                    <td class="tabla__td producto__td">$ <?php echo $producto['precio'] ?> </td>
                    <td class="tabla__td producto__td"> <?php echo $producto['stock'] ?> </td>
                    <td class="contenedor-botones">
                        <div class="grid-botones">
                        <a href="/artecalendaStack/admin/productos/actualizar.php?id=<?php echo $producto['id']; ?>" class="editar">
                            Editar
                        </a>
                        <form method="POST" class="eliminar">
                            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                            <input type="submit" class="eliminar" value="Eliminar" style="font-family: inherit; border: none; font-size: 18px;">
                        </form>
                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
 

    <script src="app.js"></script>
    <script src="https://kit.fontawesome.com/5bb4703aed.js" crossorigin="anonymous"></script>
</body>
</html>