// Array para agregar los productos
let carrito = [];

// Agregar un producto al array del carrito
const agregarAlCarrito = (producto) => {
  carrito.push(producto);  
  renderCarrito();
} 

// Renderizar el carrito 
const renderCarrito = () => {

  // Obtener referencia al div carrito
  const divCarrito = document.getElementById('carrito');

  // Generar HTML
  let html = '';
  
  html += '<h3>Carrito</h3>';

  html += '<div class="row">';

  // Recorrer el carrito y generar el HTML
  carrito.forEach((producto) => {

    html += `
      <div class="col">
        <img height="40" src="${producto.imagen}" />  
        ${producto.nombre} - <b>$${producto.precio}</b>
      </div>
    `;

  });

  html += '</div>';

  // Agregar botón de compra  
  html += `
    <button class="btn btn-primary mt-3">
      Comprar (${carrito.length})
    </button>
  `;

  // Insertar HTML en el DOM  
  divCarrito.innerHTML = html; 

}


// Cuando carga la página
document.addEventListener('DOMContentLoaded', () => {
  // Inicializar carrito, listeners, etc
  renderCarrito();
});