// Variables
const carrito = document.querySelector('#carrito');
var contenedorCarrito = document.querySelector('#lista-carrito tbody');
const btnpagar=document.querySelector(`#Carrito`); //BOTON PARA LOCAL storage
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito');
const listaProductos = document.querySelector('#todos');
const checkout=document.querySelector(`#checkpagos`);
var ejectuarGaleria=document.querySelector('.turismo__galeria');


var articulosCarrito = [];


cargarEventListeners();

function cargarEventListeners() {

    //PROCEDE A PAGO DE CARRITO   
    btnpagar.addEventListener('click',guardarLocalStorage )
    // Dispara cuando se presiona "Agregar Carrito"
    if (listaProductos){
        listaProductos.addEventListener('click', agregarProducto);

    }
    // Eliminar producto del carrito
    carrito.addEventListener('click', eliminarCurso);
    // Vaciar el carrito
    vaciarCarritoBtn.addEventListener('click', () => {
        articulosCarrito = [];
        vaciarCarrito();
    });
    
}


    if(ejectuarGaleria){
        ejectuarGaleria.addEventListener('click',desplegarGaleria)

    }


function local(){
    console.table(articulosCarrito)
    var carrito= JSON.stringify(articulosCarrito["precio"])
    localStorage.setItem("articulosCarrito",carrito);
    console.log(JSON.parse(localStorage['carrito']))
}

function desplegarGaleria(e){
    e.preventDefault();
    
    if (e.target.tagName= 'img') {
    var image = e.target.getAttribute("src");
    console.log('joasfas')
    Swal.fire({
        title: 'Oaxaca!',
        text: 'Visita nuestros corporativos en Oaxaca!!',
        imageUrl: image,
        // imageWidth: 400, //Puedes agregar medidas de width y height con estos parametros en caso de que no quieras la medida automatica
        // imageHeight: 400,
        imageAlt: 'Custom image',
      })
}
}


//Modoifica estilos por un momento para que el icono de success se muestre bien


function agregarProducto(e) {
    e.preventDefault();
    if (e.target.classList.contains('todos__boton')) {
        const cursoSeleccionado = e.target.parentElement.parentElement;
        leerDatosProducto(cursoSeleccionado);

        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom',
            iconColor: 'green',
            padding: '2rem',
            customClass: {
                popup: 'colored-toast'
            },
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            width:500,
        })
        
        Toast.fire({
            icon: 'info',
            title: 'Se agregó correctamente'
          })
    }
}



//Cambia los estilos para que el icono de success se vea
function cambioestilosicono(){
    document.getElementById('modifiedstyles').setAttribute('href', 'estilosIcono.css');
}

//Cambia los estilos otravez a los normales
function cambioestilos(){
    document.getElementById('modifiedstyles').setAttribute('href', 'styles.css');
}


// Elimina un curso del carrito
function eliminarCurso(e) {
    if(e.target.classList.contains('borrar-producto')) {
        const productoId = e.target.getAttribute('data-id')
        Swal.fire({
            icon:'warning',
            title: 'Estas seguro que quieres eliminar el producto?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Eliminar',
            denyButtonText: `No Eliminar`,
            
          }).then((result) => {
         
            if (result.isConfirmed) {
                cambioestilosicono();
                // Elminar el curso del arreglo
                articulosCarrito = articulosCarrito.filter(producto => producto.id !== productoId);
                carritoHTML(); // Actualiza el HTML
                Swal.fire({
                    icon:'success',
                    iconColor: 'green',
                    text:'El articulo fue borrado correctamente',
                    title: 'Eliminado',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                })
                
                setTimeout(cambioestilos, 2000)
                
                
                
                localStorage.setItem('contenedorCarrito', JSON.stringify(articulosCarrito));
            } else if (result.isDenied) {
                Swal.fire({text:'El producto no se eliminó',iconColor:'Orange' ,icon: 'info'})
                
            }
        })
    }
}

// Lee el contenido del producto y extrae la info
function leerDatosProducto(producto) {
    // Crea un objeto con el contenido
    const infoProducto = {
        imagen: producto.querySelector('img').src,
        titulo: producto.querySelector('h3').textContent,
        precio: producto.querySelector('.todos__precio span').textContent,
        id: producto.querySelector('button').getAttribute('data-id'),
        cantidad: 1
    }

    // Revisa si un elemento ya existe 
    const existe = articulosCarrito.some(producto => producto.id === infoProducto.id);
    if(existe) {
        // Aumenta la cantidad
        const productos = articulosCarrito.map(producto => {
            if (producto.id === infoProducto.id) {
                producto.cantidad++;
                return producto; // retorna el objeto actualizado
            } else {
                return producto; // reotrna el objeto sin cambios
            }
        })
        articulosCarrito = [...productos];
        localStorage.setItem('contenedorCarrito', JSON.stringify(articulosCarrito));
        
    } else {
        articulosCarrito = [...articulosCarrito, infoProducto];
        localStorage.setItem('contenedorCarrito', JSON.stringify(articulosCarrito));
        
    }

    // Agrega elementos al arreglo de carrito
    carritoHTML();
}


function carritoHTML() {
    // Limpiar el HTML 
    limpiarHTML();
    
    articulosCarrito.forEach(producto => {
        const { imagen, titulo, precio, cantidad, id } = producto;
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${imagen}">
            </td>
            <td>${titulo}</td>
            <td>${precio}</td>
            <td>${cantidad}</td>
            <td>
                <a href="#" class="borrar-producto" data-id="${id}">X</a>
            </td>
        `;
        contenedorCarrito.appendChild(row);

    })
}   

// limpia el HTML
function limpiarHTML() {
    // Forma lenta
    // contenedorCarrito.innerHTML = '';

    while(contenedorCarrito.firstChild) {
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }
}

//Nueva funcion para la confirmacion del vaciado de carrito

function vaciarCarrito(){
    Swal.fire({
        icon:'warning',
        title: 'Estas seguro que quieres vaciar el carrito?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Vaciar',
        denyButtonText: `No Vaciar`,
      }).then((result) => {
    
        if (result.isConfirmed) {
            while(contenedorCarrito.firstChild) {
                contenedorCarrito.removeChild(contenedorCarrito.firstChild);
            }
            localStorage.setItem('contenedorCarrito', JSON.stringify(contenedorCarrito));
            cambioestilosicono()
            Swal.fire({
                icon:'success',
                title: 'Hecho!',
                text: `El carrito se ha vaciado`,
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false,
                allowOutsideClick: false,
            })
            setTimeout(cambioestilos, 2000)

        } else if (result.isDenied) {
          Swal.fire({text:'El carrito no se vació',iconColor:'Orange' ,icon: 'info'})
          contenedorCarrito=contenedorCarrito
        }
      })
}


//Local storage


var precioFinal=0
function guardarLocalStorage() {
    //Reseteo de precios finales para que no aumente exponencialmente
    if (precioFinal>0) {
         precioFinal=0       
         
    }

    //Para resetear preciototal 
    if (localStorage.getItem('precioTotal')>0) {
        precioTotal=0
        localStorage.setItem('precioTotal',precioTotal)
    }


    //Para no repetir carrito reseteo de arrays de productos
    listaDePrecios=[];
    listaDeCantidades=[]; 
    preciosTotales=[];
    listaDeProductos=[];
    cantidadesTotales=0;

    //borra local sotrage para volver a guardar productos en caso de que seleccione mas o elimine productos
    localStorage.removeItem('contenedorCarrito');
    localStorage.setItem('contenedorCarrito', JSON.stringify(articulosCarrito));
    Articulos=JSON.parse(localStorage.getItem('contenedorCarrito'));
    // console.table(Articulos)

    //TE saca los nombres de los productos 
    for (nombre of Articulos) {
        nombres=nombre['titulo'];
        listaDeProductos.push(nombres);
    }
    // console.log(`Los nombres son ${listaDeProductos}`)

    //Te saca los precios del array
    for (precio of Articulos) {
        valor=precio['precio'];
        valor=valor.split('$');//remueve signo de precios
        valor=parseFloat(valor[1]);//Lo vuelve numero
        listaDePrecios.push(valor)//adjunta el valor mas nuevo al arrya de precios
        // console.log(`La lista de precios ${listaDePrecios}`) //Comprobar que los valores se estén guardando bien
    }
    //Guardar las cantidades en localstorage

    for (cantidad of Articulos) {
        cant=cantidad['cantidad'];//Saca solo la cantidad
        listaDeCantidades.push(cant)//Adjunta al array
        // console.log(`La lista de cantidad ${listaDeCantidades}`) //ComandoComprobar que los valores se estén guardando bien
    }

    //Calculo total de objetos que se tiene en el carrito
    for (productosCantidades of listaDeCantidades) {
        cantidadesTotales+=productosCantidades
    }

    //Verificar que el numero total de producttos sea correcto
    //alert(`Cantidad total de prodcutos ${cantidadesTotales}`)
    //Mandamos las 3 a localStorage  (Antes reseteamos todo dentro del local storage para que no haya duplicacion de productos)
    localStorage.removeItem('cantidad');
    localStorage.removeItem('precios');
    localStorage.removeItem('productos');
    localStorage.removeItem('cantidadTotal');
    
    //Procedemos a guardar los nuevos arrays dentro del storage
    localStorage.setItem('precios', JSON.stringify(listaDePrecios));
    localStorage.setItem('productos', JSON.stringify(listaDeProductos));
    localStorage.setItem('cantidad', JSON.stringify(listaDeCantidades));
    localStorage.setItem('cantidadTotal', (cantidadesTotales));

    //Mandamos a llamar los precios para multiplicarlos y sacar los precios totales e individuales
    var Cantidades=JSON.parse(localStorage.getItem('cantidad'));
    var Precios=JSON.parse(localStorage.getItem('precios'));
    var Productos=JSON.parse(localStorage.getItem('productos'))
    //PROBAR LA IMPRESION DE PRODCUTOS
    // console.log(Productos)

    //Multiplica la cantidad por los precios y obtenemos un desgloce de los productos    
    for (i=0;i<Precios.length;i++) {
//Llamado e impresión de todos los productos
    cantidadActual=Cantidades[i]    
    precioActual=Precios[i]  
    productoActual=Productos[i]  
    multiplPrecios=cantidadActual*precioActual//Multiplicacion de cantidad por precio
    // console.log(`${cantidadActual} ${productoActual} cuestan ${multiplPrecios} pesos `)// Mensaje de producto, canridad y precio total
    
    precioFinal+=multiplPrecios//Contador para saber el precio total
    // console.log(`precioFinal total ${precioFinal}`)//Imprime el precio total
    localStorage.setItem('precioTotal',precioFinal) //Lo guarda en localstorage
}
}   


function crearElemento(){
    //Mandar a llamar  array de precios y prodcutos de localstorage para poder mostrarlo en checkout
    Productos=JSON.parse(localStorage.getItem('productos'))
    Precios=JSON.parse(localStorage.getItem('precios'))
    Cantidades=JSON.parse(localStorage.getItem('cantidad'))
    console.log(`Los prodcutso son ${Productos} `)

    const div = document.getElementById('contenedorprod');
    // document.querySelector('#numeroArticulos').value=Productos.length;
    //Generar elementos con la informacion del localstorage
    

    //Creacion de elemento para desplegar total de productos
    const resultadoPrecio=document.getElementById('contenedorTotal')
    var contenprecio=document.createElement('b');
    contenprecio.textContent=`$ ${localStorage.getItem('precioTotal')}`
    resultadoPrecio.appendChild(contenprecio)


    //Creacion de elementos para numero a un lado de icono de carrito (productos totales)
    const valorTotalProductos=document.getElementById('contenedorPrecio')
    var contenprecio=document.createElement('b');
    valorTotalProductos.removeChild(valorTotalProductos.childNodes[1]);
    contenprecio.textContent=` ${localStorage.getItem('cantidadTotal')} unidades `//Se adjunta los productos totale de localStorage
    valorTotalProductos.appendChild(contenprecio)
    

    // Iteracion de un array de para poder crear elementos (prodcutos y precios con cantidades ) 
    for(let i=0; i<Productos.length; i++){
        var nuevop=document.createElement('p'); //crea p
        var nuevoa=document.createElement('span');//crea span
        nuevoa.textContent = Productos[i]; //Pone el nombre de prodcuto actual
        nuevop.appendChild(nuevoa)//lo agrega al p
        div.appendChild(nuevop); //Lo adjunta al div de los prodcutos
       
        var nuevoSpan=document.createElement('span');
        nuevoSpan.classList.add("price")
        nuevoSpan.textContent=`$ ${Precios[i]} x ${Cantidades[i]} (unidades)` ;//impresion de los precios
        nuevop.appendChild(nuevoSpan)
        div.appendChild(nuevop); 
    
    }

}


//Carga los productos previos del usuario (y puede agregar o borrar cosas)
function CarritoAlmancenado(){

    carritolleno = JSON.parse(localStorage.getItem('contenedorCarrito'));//Saca lo que esta guardado en el localstorage
    for (articulos of carritolleno) { 
    //Objeto de productos con los datos del carrito actual
    const infoProducto = {
        imagen: articulos["imagen"],
        titulo: articulos["titulo"],
        precio: articulos["precio"],
        id: articulos["id"],
        cantidad: articulos["cantidad"],
    }
    //SE USAN ELEMENTOS DE FUNCIONES ANTERIORES PARA AGREGARLO A LA LISTA
    // Revisa si un elemento ya existe 
    const existe = articulosCarrito.some(producto => producto.id === infoProducto.id);
    if(existe) {
        // Aumenta la cantidad
        const productos = articulosCarrito.map(producto => {
            if (producto.id === infoProducto.id) {
                producto.cantidad++;
                return producto; // retorna el objeto actualizado
            } else {
                return producto; // reotrna el objeto sin cambios
            }
        })
        articulosCarrito = [...productos];
    } else {
        articulosCarrito = [...articulosCarrito, infoProducto];
    }
    }
    // Agrega elementos al arreglo de carrito
    carritoHTML();
}



