<?php
    session_start();
    require_once '../app/connection.php';
    $connection = connection_db();
    $user_email = $_SESSION['user'];
    $sql = "SELECT user_names, user_first_surname FROM users_table WHERE user_email = '$user_email'";
    $data = mysqli_query($connection, $sql);
    while($show_data = mysqli_fetch_assoc($data)) {
        $user_names = $show_data['user_names'];
        $user_first_surname = $show_data['user_first_surname'];
    }
    if(isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
    <?php
                require_once '../app/config.php';
                require_once '../app/dependencies.php';
    ?>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Image and text -->
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="../raw/img/math.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                        Factorial
                    </a>
                    <div class="text-right">
                        <a class="btn btn-light btn-sm" href="../control/logout.php"><i class="fas fa-door-open"></i> Salir</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="jumbotron text-center shadow bg-light">
                    <div>
                        <h1 class="display-4">¡Hola, <?php echo $user_names . ' ' . $user_first_surname;?>!</h1>
                        <hr class="my-4">
                        <p>Esto es una aplicación que te permite calcular factoriales y llevar un registro de estos.</p>
                    </div>
                    <div class="my-5" id="factorials_calculate">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <form>
                                        <div>
                                            <h6>Calcular Factoriales</h6>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="factorial_number">Factorial:</label>
                                            <input type="text" class="form-control form-control-sm" id="factorial_number" placeholder="Ingresar el factorial">
                                        </div>
                                        <div class="btn-group btn-block">
                                            <span class="btn btn-dark" id="clear_botton">Limpiar</span>
                                            <span class="btn btn-warning" id="calculate_botton">Calcular</span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-8">
                                    <div>
                                        <h6>Historial</h6>
                                    </div>
                                    <hr>
                                    <div>
                                        <table class="table table-responsive-sm table-striped table-borderless table-white">
                                            <thead>
                                                <tr>
                                                    <th>ID Factorial</th>
                                                    <th>Procesos</th>
                                                    <th>Resultado</th>
                                                </tr>
                                            </thead>
                                            <tbody id="show_data_factorial"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="btn btn-dark" id="start_botton">Empezar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../manager/manager-factorial.js"></script>
</body>

</html>
<?php
    } else {
        header('location:../index.php');
    }
?>