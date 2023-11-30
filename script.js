document.addEventListener('DOMContentLoaded', function () {
    const botonesAgregar = document.querySelectorAll('.btn-add-to-cart');
    const listaCarrito = document.getElementById('lista-carrito');

    botonesAgregar.forEach(boton => {
        boton.addEventListener('click', agregarAlCarrito);
    });

    function agregarAlCarrito(event) {
        const producto = event.target.closest('.producto');
        const nombre = producto.querySelector('h3').innerText;
        const precio = producto.querySelector('.precio').innerText;

        // Crear elemento de lista para el carrito
        const itemCarrito = document.createElement('li');
        itemCarrito.innerHTML = <span>${nombre}</span> - <span>${precio}</span>;

        // Agregar el elemento al carrito
        listaCarrito.appendChild(itemCarrito);
    }
});