document.addEventListener('DOMContentLoaded', function() {
    // Función para mostrar el modal de inicio de sesión
    function showLoginModal() {
        document.getElementById('loginModal').style.display = 'block';
    }

    // Función para cerrar el modal
    function closeModal() {
        document.getElementById('loginModal').style.display = 'none';
    }

    // Asigna el evento de clic al botón de inicio de sesión
    document.getElementById('showLoginForm').addEventListener('click', function(event) {
        event.preventDefault(); // Evita que el enlace recargue la página
        showLoginModal(); // Muestra el modal
    });

    // Asigna el evento de clic al botón de cierre del modal
    document.querySelector('.close').addEventListener('click', closeModal);

    // Cerrar el modal al hacer clic fuera de él
    window.onclick = function(event) {
        if (event.target == document.getElementById('loginModal')) {
            closeModal();
        }
    }

    // Validación del formulario de registro
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Previene el envío del formulario por defecto

        var password = document.getElementById('registerPassword');
        var confirmPassword = document.getElementById('confirmPassword');

        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Las contraseñas no coinciden.');
        } else {
            confirmPassword.setCustomValidity('');
        }

        // Verifica si el formulario es válido
        if (!this.checkValidity()) {
            event.stopPropagation(); // Evita que el formulario se envíe
        } else {
            // Aquí puedes agregar más validaciones o el código para enviar el formulario
        }
    });
});
