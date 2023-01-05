<?php
    session_start();
    require_once '../app/connection.php';
    $connection = connection_db();
    $user = $_POST['user'];
    $password = $_POST['password'];
    $query_select = "SELECT count(*) AS user_existed FROM users_table WHERE user_email = '$user' AND user_password = '$password'";
    $result = mysqli_query($connection, $query_select);
    $user_result = mysqli_fetch_array($result)['user_existed'];
    if($user_result > 0) {
        $_SESSION['user'] = $user;
        echo 1;
    } else {
        echo 0;
    }
?>