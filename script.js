document.getElementById('showLoginForm').addEventListener('click', function(event) {
    event.preventDefault(); // Evita que el enlace recargue la página
    document.getElementById('loginModal').style.display = 'block'; // Muestra el modal
});

// Función para cerrar el modal
document.getElementsByClassName('close')[0].addEventListener('click', function() {
    document.getElementById('loginModal').style.display = 'none'; // Oculta el modal
});

// Función para cerrar el modal al hacer clic fuera de él
window.onclick = function(event) {
    if (event.target == document.getElementById('loginModal')) {
        document.getElementById('loginModal').style.display = 'none';
    }
}
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
    }

    // Aquí puedes agregar más validaciones o el código para enviar el formulario
});
