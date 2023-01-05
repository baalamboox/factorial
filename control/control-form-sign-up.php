<?php
    require_once '../app/connection.php';
    $connection = connection_db();
    // mysqli::real_escape_string(): Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL, tomando en cuenta el conjunto de caracteres actual de la conexión.
    // htmlentities(): Esta función es útil para evitar que el texo introducido por el usuario contenga código HTML. 
    $data = array(
        $connection->real_escape_string(htmlentities($_POST['form_user_names'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_first_surname'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_second_surname'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_email'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_password']))
    );
    $sql = 'INSERT INTO users_table(user_names, user_first_surname, user_second_surname, user_email, user_password) VALUES (?, ?, ?, ?, ?)';
    $query = $connection->prepare($sql); //mysqli::prepare(): Prepara una consulta SQL.
    $query->bind_param('sssss', $data[0], $data[1], $data[2], $data[3], $data[4]);
    echo $query->execute();
    $connection->close();
?>