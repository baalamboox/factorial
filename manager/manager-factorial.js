$(document).ready(() => {
    $('#factorials_calculate').hide();
    $('#clear_botton').click(() => {
        $('#factorial_number').val('');
    });
    $('#start_botton').click(() => {
        $('#factorials_calculate').toggle();
    });
    $('#calculate_botton').click(() => {
        let factorial_number = parseInt($('#factorial_number').val().replace('!', ''));
        let factorial_process = '';
        let factorial_result = 1;
        for(let i = factorial_number; i > 0; i--) {
            factorial_process += i + ' x ';
            factorial_result *= i;
        }
        factorial_process = factorial_process.substring(0, factorial_process.length-2).trim();
        $.ajax({
            type: 'POST',
            url: '../control/control-factorial.php',
            data: {
                'factorial_process': factorial_process,
                'factorial_result': factorial_result
            },
            success: result => {
                console.log(result);
                if(result == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Genial!',
                        text: 'Se guardo este factorial correctamente.'
                    }).then(result => {
                        $('#show_data_factorial').load('factorial-table.php');
                    });
                }
            }
        });
    });
});