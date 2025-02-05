<?php



session_start();
if (isset($_SESSION["user_id"]) && isset($_POST['id'])){
    include('conection.php');
    $id = $_POST['id'];
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
    $query = $conection->prepare('UPDATE tasks SET title = :title, description = :description, status_id = :status WHERE tasks_id = :id AND users_id = :user');
    $query->bindParam(':id', $id);
    $query->bindParam(':title', $title);
    $query->bindParam(':description', $description);
    $query->bindParam(':status', $status);
    $query->bindParam(':user', $_SESSION['user_id']);
    $query->execute();
    
}

header('Location: main.php');

?>