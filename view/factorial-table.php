<?php
    session_start();
    require_once '../app/connection.php';
    $connection = connection_db();
    $user_email = $_SESSION['user'];
    $sql = "SELECT factorial_id, factorial_proccess, factorial_result FROM factorial_table WHERE user_email = '$user_email'";
    $query = $connection->query($sql);
    while($factorial_data = mysqli_fetch_assoc($query)) {
?>
        <tr>
            <td><?php echo $factorial_data['factorial_id'];?></td>
            <td><?php echo $factorial_data['factorial_proccess'];?></td>
            <td><?php echo $factorial_data['factorial_result'];?></td>
        </tr>
<?php
    }
?>