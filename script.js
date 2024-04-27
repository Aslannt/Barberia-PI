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

// Código para el gráfico de barras
var ctxBar = document.getElementById('barChart').getContext('2d');
var barChart = new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: ['Corte de Cabello', 'Corte de Barba', 'Manicura', 'Aliado', 'Tratamiento Capilar'],
        datasets: [{
            label: 'Número de Ventas',
            data: [120, 90, 80, 70, 60],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

// Código para el gráfico de líneas
var ctxLine = document.getElementById('lineChart').getContext('2d');
var lineChart = new Chart(ctxLine, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
        datasets: [{
            label: 'Ventas de Productos',
            data: [100, 120, 130, 150, 180],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

// Código para el gráfico de dona
var ctxDoughnut = document.getElementById('doughnutChart').getContext('2d');
var doughnutChart = new Chart(ctxDoughnut, {
    type: 'doughnut',
    data: {
        labels: ['Corte de Cabello', 'Corte de Barba', 'Manicura', 'Aliado', 'Tratamiento Capilar'],
        datasets: [{
            label: 'Porcentaje de Ventas',
            data: [30, 25, 20, 15, 10],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)'
            ],
        }]
    },
    options: {
        responsive: true,
        legend: {
            position: 'top',
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    }
});

// Código para el gráfico de área
var ctxArea = document.getElementById('areaChart').getContext('2d');
var areaChart = new Chart(ctxArea, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
        datasets: [{
            label: 'Ventas de Shampoo',
            data: [100, 120, 130, 150, 180],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            fill: true
        }, {
            label: 'Ventas de Dermarrolers',
            data: [80, 90, 100, 120, 150],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            fill: true
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

// Código para el gráfico de radar
var ctxRadar = document.getElementById('radarChart').getContext('2d');
var radarChart = new Chart(ctxRadar, {
    type: 'radar',
    data: {
        labels: ['Corte de Cabello', 'Corte de Barba', 'Manicura', 'Aliado', 'Tratamiento Capilar'],
        datasets: [{
            label: 'Ventas',
            data: [100, 90, 80, 70, 60],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            pointBackgroundColor: 'rgba(255, 99, 132, 1)'
        }]
    },
    options: {
        responsive: true,
        legend: {
            position: 'top',
        },
        scale: {
            ticks: {
                beginAtZero: true
            }
        }
    }
});
document.querySelectorAll('.add-button').forEach(function(button) {
    button.addEventListener('click', function() {
       var title = this.getAttribute('data-title');
       var price = this.getAttribute('data-price');
       // Aquí puedes implementar la lógica para añadir el producto al carrito
       console.log('Producto añadido al carrito:', title, 'Precio:', price);
    });
   });
   


