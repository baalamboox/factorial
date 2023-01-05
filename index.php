<!DOCTYPE html>
<html lang="es-MX" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Guillermo Jimenez">
        <meta name="description" content="¡Aquí va descripción!">
        <meta name="keywords" content="¡Aquí van palabras clave!">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <?php
            require_once 'app/config.php';
            require_once 'app/dependencies.php';
        ?>
    </head>
    <body class="bg-light">
        <?php
            if(isset($_GET['requested_view'])) {
                switch($_GET['requested_view']) {
                    case 'iniciar-sesion': {
                        require_once 'view/form-sign-in.php';
                        break;
                    }
                    case 'registro': {
                        require_once 'view/form-sign-up.php';
                        break;
                    }
                    default: {
                        require_once 'view/form-sign-in.php';
                        break;
                    }
                }
            } else {
                require_once 'view/form-sign-in.php';
            }
        ?>
    </body>
</html>