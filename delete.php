<?php

session_start();
if(isset($_GET['id']) && isset($_SESSION['user_id'])){
    include 'conection.php';
    $query = $conection->prepare("DELETE FROM tasks WHERE tasks_id = :id AND users_id = :user");
    $query->bindParam(':id', $_GET['id']);
    $query->bindParam(':user', $_SESSION['user_id']);
    $query->execute();
}
header('Location: main.php');

?>