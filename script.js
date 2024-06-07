document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-button');
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const cartModal = document.getElementById('cart-modal');
    const checkoutButton = document.getElementById('checkout-button');
    const mensajeEmergenteGlobal = document.getElementById('mensajeEmergente');

    let total = 0;

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const title = this.dataset.title;
            const price = parseFloat(this.dataset.price);

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

            // Mostrar mensaje emergente
            const mensajeEmergente = cartItem.querySelector('.mensaje-emergente');
            mensajeEmergente.style.display = 'block';

            setTimeout(function() {
                mensajeEmergente.style.display = 'none';
            }, 3000); // Oculta el mensaje después de 3 segundos
        });
    });

    checkoutButton.addEventListener('click', function() {
        // Mostrar mensaje emergente global
        mensajeEmergenteGlobal.innerHTML = '<p>Compra finalizada</p>';
        mensajeEmergenteGlobal.style.display = 'block';

        setTimeout(function() {
            mensajeEmergenteGlobal.style.display = 'none';
            // Vacía el carrito
            cartItems.innerHTML = '';
            cartTotal.textContent = '0.00';
            total = 0;
            // Aquí puedes agregar la lógica para procesar la compra
        }, 3000); // Oculta el mensaje después de 3 segundos
    });

    // Cerrar el carrito cuando se hace clic fuera de él
    window.addEventListener('click', function(event) {
        if (event.target === cartModal) {
            cartModal.style.display = 'none';
        }
    });
});
