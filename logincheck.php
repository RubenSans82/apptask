<?php

include 'conection.php';
if (isset($_POST['user'])) {
    $username = $_POST['user'];
    $password = $_POST['password'];
    $query = $conection->prepare("SELECT * FROM users WHERE username = :user");
    $query->bindParam(':user', $username);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['users_id'];
        $_SESSION['username'] = $username;
        header('Location: main.php');
        exit;
    }

}
header('Location: login.php');


?>