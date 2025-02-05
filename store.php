<?php

if (isset($_POST['title'])) {
    include("conection.php");
    session_start();
    $title = $_POST['title'];
    $description = $_POST['description'];
    switch($_POST['status']){
        case 'pendiente':
            $status = 0;
            break;
        case 'en proceso':
            $status = 1;
            break;
        case 'terminada':
            $status = 2;
            break;
        default:
            $status = null;
    }
    var_dump($_POST);
    echo "<br>";
    var_dump($status);
    exit;

    $query = $conection->prepare("INSERT INTO tasks (title, description, status_id, creation_date, users_id) VALUES (:title, :description, :status, CURDATE() , :user)");
    $query->bindParam(":title", $title);
    $query->bindParam(":description", $description);
    $query->bindParam(":status", $status);
    $query->bindParam("user", $_SESSION['user_id']);
    $query->execute();

}
header("Location: main.php");
?>