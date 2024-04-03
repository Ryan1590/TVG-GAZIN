<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
function alertaSucesso(tipo, mensagem) {
    Swal.fire({
        position: 'center',
        icon: tipo,
        title: mensagem,
        showConfirmButton: true,
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'home.php';
        }
    });
<<<<<<< HEAD
=======
=======
function alertaSucesso(tipo, mensagem) {
    Swal.fire({
        position: 'center',
        icon: tipo,
        title: mensagem,
        showConfirmButton: true,
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'home.php';
        }
    });
>>>>>>> cbbb44288ce4d439adea362c20d4644d99cf3e4e
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
}