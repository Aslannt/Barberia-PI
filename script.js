document.addEventListener('DOMContentLoaded', () => {
    const cartButton = document.getElementById('carrito-boton');
    const cartModal = document.getElementById('cart-modal');
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const checkoutButton = document.getElementById('checkout-button');
    let cart = [];

    // Mostrar/ocultar el modal del carrito al hacer clic en el botón del carrito
    cartButton.addEventListener('click', (event) => {
        event.preventDefault(); // Previene la redirección
        cartModal.style.display = cartModal.style.display === 'none' ? 'block' : 'none';
    });

    // Añadir productos al carrito
    document.querySelectorAll('.add-button').forEach(button => {
        button.addEventListener('click', () => {
            const product = {
                name: button.dataset.title,
                price: parseFloat(button.dataset.price),
                quantity: 1
            };

            const existingProduct = cart.find(item => item.name === product.name);
            if (existingProduct) {
                existingProduct.quantity++;
            } else {
                cart.push(product);
            }

            updateCart();
        });
    });

    // Actualizar el contenido del carrito
    function updateCart() {
        cartItems.innerHTML = '';
        let total = 0;

        cart.forEach(product => {
            total += product.price * product.quantity;

            const li = document.createElement('li');
            li.textContent = `${product.name} - $${product.price} x ${product.quantity}`;
            cartItems.appendChild(li);
        });

        cartTotal.textContent = total.toFixed(2);
        cartButton.textContent = `Carrito (${cart.length})`;
    }

    // Finalizar compra y vaciar el carrito
    checkoutButton.addEventListener('click', () => {
        alert('Compra finalizada!');
        cart = [];
        updateCart();
    });
});
