document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-button');
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const cartModal = document.getElementById('cart-modal');
    const cartButton = document.getElementById('carrito-boton');

    let total = 0;

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const title = this.dataset.title;
            const price = parseFloat(this.dataset.price); // Asegúrate de que el precio se está leyendo correctamente

            total += price;

            const cartItem = document.createElement('li');
            cartItem.innerHTML = `
                ${title} - $${price.toFixed(2)}
                <button class="remove-button">X</button>
            `;

            cartItems.appendChild(cartItem);
            cartTotal.textContent = total.toFixed(2);

            // Botón de eliminar
            cartItem.querySelector('.remove-button').addEventListener('click', function() {
                cartItems.removeChild(cartItem);
                total -= price;
                cartTotal.textContent = total.toFixed(2);
            });

            // Muestra un mensaje emergente
            const mensajeEmergente = document.getElementById('mensajeEmergente');
            mensajeEmergente.innerText = `Añadiste ${title} al carrito`;
            mensajeEmergente.style.display = 'block';
            setTimeout(() => mensajeEmergente.style.display = 'none', 3000);
        });
    });

    cartButton.addEventListener('click', function() {
        cartModal.style.display = (cartModal.style.display === 'block') ? 'none' : 'block';
    });

    // Cerrar el carrito cuando se hace clic fuera de él
    window.addEventListener('click', function(event) {
        if (event.target === cartModal) {
            cartModal.style.display = 'none';
        }
    });
});
