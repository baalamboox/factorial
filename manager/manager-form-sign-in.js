$(document).ready(() => {
    $('#sign_in').click(() => {
        $.ajax({
            type: 'POST',
            url: 'control/control-form-sign-in.php',
            data: {
                'user': $('#user').val(),
                'password': $('#password').val()
            },
            success: result => {
                if(result == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Hola, bienvenido!',
                    }).then(result => {
                        $('#form-login')[0].reset();
                        window.location = 'view/home-page.php';
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Al parecer no estas registrado o tus datos son incorrectos.'
                    }).then(result => {
                        $('#form-login')[0].reset();
                    });
                }
            }
        });
    });
});