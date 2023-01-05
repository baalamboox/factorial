$(document).ready(() => {
    $('#sign_up').click(() => {
        $.ajax({
            type: 'POST',
            url: 'control/control-form-sign-up.php',
            data: $('#form-sign-up').serialize(),
            success: result => {
                if(result == 1) {
                    Swal.fire({
                        title: '¡Felicidades!',
                        text: 'Te acabas de registrar con éxito.',
                        icon: 'success'
                    }).then(r => {
                        $('#form-sign-up')[0].reset();
                        window.location = 'index';
                    });;
                } else {
                    Swal.fire({
                        title: '!Oops...!',
                        text: 'Hubó un error al registrarte, intente de nuevo.',
                        icon: 'error'
                    });
                }
            }
        });
        // if(checking_password($('#user_password').val(), $('#user_confirm_password').val())) {
        //     $.ajax({
        //         type: 'POST',
        //         url: 'control/control-form-sign-up.php',
        //         data: $('#form-sign-up').serialize(),
        //         success: result => {
        //             if(result == 1) {
        //                 Swal.fire({
        //                     title: '¡Felicidades!',
        //                     text: 'Te acabas de registrar con éxito.',
        //                     icon: 'success'
        //                 }).then(r => {
        //                     $('#form-sign-up')[0].reset();
        //                 });;
        //             } else {
        //                 Swal.fire({
        //                     title: '!Oops...!',
        //                     text: 'Hubó un error al registrarte, intente de nuevo.',
        //                     icon: 'error'
        //                 });
        //             }
        //         }
        //     });
        // } else {
        //     Swal.fire({
        //         title: '!Oops...!',
        //         text: 'Las contraseñas no coinciden o estan en blanco.',
        //         icon: 'error'
        //     });
        // }
        // checking_blank_inputs();
    });
});
function checking_password(password_1, password_2) {
    if(password_1 == '' || password_2 == '') {
        return false;
    } else {
        return password_1 === password_2;
    }
}
function checking_blank_inputs() {
    if($('#form_user_names').val() == '') {
        Swal.fire({
            title: '¡Oops...!',
            text: 'Ingresa tu nombre',
            icon: 'warning'
        });
        return false; // Corta el flujo de trabajo y evita que se cuelgue la paginas.
    } else if($('#form_user_first_surname').val() == '') {
        Swal.fire({
            title: '¡Oops...!',
            text: 'Ingresa tu apellido parterno',
            icon: 'warning'
        });
        return false;
    } else if($('#form_user_second_surname').val() == '') {
        Swal.fire({
            title: '¡Oops...!',
            text: 'Ingresa tu apellido marterno',
            icon: 'warning'
        });
        return false;
    } else if($('#form_user_birthday').val() == '') {
        Swal.fire({
            title: '¡Oops...!',
            text: 'Ingresa tu fecha de nacimiento',
            icon: 'warning'
        });
        return false;
    } else if($('#form_user_phone_number').val() == '') {
        Swal.fire({
            title: '¡Oops...!',
            text: 'Ingresa tu numero telefonico',
            icon: 'warning'
        });
        return false;
    } else if($('#form_user_carrer').val() == '') {
        Swal.fire({
            title: '¡Oops...!',
            text: 'Ingresa tu carrera',
            icon: 'warning'
        });
        return false;
    } else if($('#form_user_email').val() == '') {
        Swal.fire({
            title: '¡Oops...!',
            text: 'Ingresa tu correo electronico',
            icon: 'warning'
        });
        return false;
    } else if($('#form_user_password').val() == '') {
        Swal.fire({
            title: '¡Oops...!',
            text: 'Ingresa tu contraseña',
            icon: 'warning'
        });
        return false;
    } else if($('#form_user_confirm_password').val() == '') {
        Swal.fire({
            title: '¡Oops...!',
            text: 'Confirma tu contraseña',
            icon: 'warning'
        });
        return false;
    }
}
function checking_alphabet_bulid() {}
// Las promesas son funiones que van a ejecutar algo de forma asincrona, hasta que se cumpla o no.
// Tambien las promesas son conocidad como arrow functions!
// Gosting, como JS es interpretado, cada cosa que se requiere tiene que estar construida.