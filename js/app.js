const btnSend = document.querySelector('#btn-send');
btnSend.addEventListener('click', () => {
    Swal.fire({
        icon: 'success',
        title: 'Genial!!! 👍',
        text: 'Mensaje enviado',
        footer: 'Revisa tu mail'
    });
});