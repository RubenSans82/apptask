<?php

include 'conection.php';
if (isset($_POST['user'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $query = $conection->prepare("SELECT * FROM users WHERE username = :user");
    $query->bindParam(':user', $user);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user'] = $user['users_id'];
        header('Location: main.php');
    }

}
header('Location: login.php');


?>