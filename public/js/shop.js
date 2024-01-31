// Datos de ejemplo para productos
const productsData = [
    { id: 1, name: 'Alimento para Perros', price: 25.99 },
    { id: 2, name: 'Alimento para Gatos', price: 20.99 },
    // Agrega más productos según sea necesario
];

// Función para mostrar productos en la página
function displayProducts() {
    const productsContainer = document.getElementById('products');

    productsData.forEach(product => {
        const productElement = document.createElement('div');
        productElement.classList.add('product');

        productElement.innerHTML = `
            <h3>${product.name}</h3>
            <p>Precio: $${product.price.toFixed(2)}</p>
            <button onclick="addToCart(${product.id})">Agregar al Carrito</button>
        `;

        productsContainer.appendChild(productElement);
    });
}

// Función para agregar productos al carrito (solo un ejemplo, sin lógica de carrito real)
function addToCart(productId) {
    alert(`Producto con ID ${productId} agregado al carrito`);
}

// Llamada a la función para mostrar productos al cargar la página
displayProducts();
