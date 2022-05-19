const carrito = document.getElementById('carrito');
const productos = document.getElementById('lista-productos');
const listaProductos = document.querySelector('#lista-carrito tbody');
const listaProductosf = document.querySelector('#lista-carrito tfoot');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

cargarEventListeners();

function cargarEventListeners () {
    productos.addEventListener('click', comprarProducto);
    carrito.addEventListener('click', eliminarProducto);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
    document.addEventListener('DOMContentLoaded', leerLocalStorage)
}

function comprarProducto(e){
    e.preventDefault();
    if(e.target.classList.contains('agregar-carrito')) {
        const producto = e.target.parentElement.parentElement;
        leerDatosProducto(producto);
    }
}

function leerDatosProducto(producto) {
    const infoProducto = {
        imagen: producto.querySelector('img').src,
        titulo: producto.querySelector('h4').textContent,
        precio: producto.querySelector('.precio span').textContent,
        id: producto.querySelector('a').getAttribute('date-id')
    }
    insertarCarrito(infoProducto);
    carritoTotal();
}

function insertarCarrito(producto) {
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
            <img src="${producto.imagen}" width=100>
        </td>
        <td>${producto.titulo}</td>
        <td class="precio">${producto.precio}</td>
        <td>
            <a href="#" class="borrar-producto" data-id="${producto.id}">X</a>
        </td>
    `;
    listaProductos.appendChild(row);
    guardarProductoLocalStorage(producto);

   // updateShopCar();
   carritoTotal(); 
}

//function updateShopCar(){
//    let total = 0;
//    const shopTotal = document.querySelector('.totalcar');
//
//    const carItems = document.querySelectorAll('td');
//    carItems.forEach(td =>{
//        const elemtCar = td.querySelector('.precio');
//        const precio = Number( elemtCar.textContent.replace('$', ''));
//        const cantidaItem = td.querySelector('.borrar-producto');
//        const borrar_producto = Number( cantidaItem.producto.id);
//
//        total = total + precio * borrar_producto;
//    })
//    shopTotal.innerHTML = `${total.toFixed(2)}`;
//}
const button = e.target;
    const item = button.closest('.card');

function carritoTotal(){
    
    let Total = 0;
    const itemCarTotal = document.querySelector('.itemCarTotal');
    carrito.forEach((item) =>{
        const precio = Number(item.precio.replace("$", ''));
        Total = Total + precio;
    })
    itemCarTotal.innerHTML = `Total: $${Total}`;
    addLocalStorage();
}



function eliminarProducto(e) {
    e.preventDefault();

    let producto,
    productoId;
    if(e.target.classList.contains('borrar-producto')){
        e.target.parentElement.parentElement.remove();
        producto = e.target.parentElement.parentElement;
        productoId = producto.querySelector('a').getAttribute('data-id');
    }
    eliminarProductoLocalStorage(productoId);
}

function vaciarCarrito() {
    while(listaProductos.firstChild){
        listaProductos.removeChild(listaProductos.firstChild);

    }

    vaciarLocalStorage();
    return false;
}

function guardarProductoLocalStorage(producto) {
    let productos;
    productos = obtenerProductoLocalStorage();
    productos.push(producto);
    localStorage.setItem('productos', JSON.stringify(productos))
}

function obtenerProductoLocalStorage() {
    let productosLS;

    if(localStorage.getItem('productos') === null){
        productosLS = [];
    } else {
        productosLS = JSON.parse(localStorage.getItem('productos'));
    }
    return productosLS;
}

function leerLocalStorage() {
    let productosLS;

    cafesLS = obtenerProductoLocalStorage();

    productosLS.forEach(function(producto){
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${producto.imagen}" width=100> 
            </td>
            <td>${producto.titulo}</td>
            <td>${producto.precio}</td>
            <td>
                <a href="#" class="borrar-producto" data-id="${producto.id}">X</a>
            </td>
        `;
        listaProductos.appendChild(row);
    });

}

function eliminarProductoLocalStorage(producto) {
    let productosLS;

    productosLS = obtenerProductoLocalStorage();

    productosLS.forEach(function(productosLS, index){
        //tal vez es producto
        if(productosLS.id === producto) {
            productosLS.splice(index, 1)
        }
    });

    localStorage.setItem('productos', JSON.stringify(productosLS));
}

function vaciarLocalStorage() {
    localStorage.clear();
}


