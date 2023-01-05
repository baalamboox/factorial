<?php
    session_start();
    require_once '../app/connection.php';
    $connection = connection_db();
    $sql = "INSERT INTO factorial_table(user_email, factorial_proccess, factorial_result) VALUES (?, ?, ?)";
    $query = $connection->prepare($sql);
    $query->bind_param('ssi', $_SESSION['user'], $_POST['factorial_process'], $_POST['factorial_result']);
    $query_executed = $query->execute();
    $query->close();
    echo $query_executed;
?>