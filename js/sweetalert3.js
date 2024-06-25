document.getElementById('hotel_reserva').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe de la forma tradicional

    // Crear un objeto FormData con los datos del formulario
    const formData = new FormData(this);

    fetch('reserva_hotel.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: data.message
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message
            });
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un problema al registrar la reserva.'
        });
    });
});
