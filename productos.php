<?php
    // Importar la conexión
    require 'includes/config/database.php';
    $db = conectarDB();

    // Consultar la base de datos
    $query = "SELECT * FROM productos LIMIT ${limite}";

    // Leer los resultados
    $resultado = mysqli_query($db, $query);

    $dataid = 1;        
?>

<div id="todos" class="contenedor">
    <h2 class="heading">Todos Nuestros Productos</h2>
    <div class="todos__grid">
        <?php while($producto = mysqli_fetch_assoc($resultado)) : ?>
        <a href="#" class="todos__producto">
            <div class="todos__mask todos__mask-v">
                <img src="imagenes/<?php echo $producto['imagen']; ?>" alt="Imagen destacada" class="todos__imagen">
            </div>
            <div class="todos__texto">
                <h3 class="todos__titulo"><?php echo $producto['nombre']; ?></h3>
                <p class="todos__precio">Precio: <span>$<?php echo $producto['precio']; ?></span> </p>
                <button class="todos__boton" data-id="<?php echo $dataid ?>">Agregar al carrito</button>
            </div>
        </a>
        <?php $dataid = $dataid + 1; endwhile; ?>
    </div>
</div>