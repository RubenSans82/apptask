<?php

session_start();
if(!(isset($_GET['id']) && isset($_SESSION['user_id']))){
    header('Location: main.php');
}

include'conection.php';

$query = $conection->prepare('SELECT * FROM tasks WHERE tasks_id = :id AND users_id = :user');
$query->bindParam(':id', $_GET['id']);
$query->bindParam(':user', $_SESSION['user_id']);
$query->execute();
$result = $query->fetch();

include'partials/header.php';
?>

<main>
    <section>
        <h2>Editar tarea</h2>
        <form action="storeedit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" required value="<?php echo $result['title'] ?>">
            <label for="description">Descripción</label>
            <textarea name="description" id="description"><?php echo $result['description']?></textarea>
            <label for="status">Estado</label>
            <select name="status" id="status" required>">
                <option value="pendiente" <?php if($result['status_id' == 0]){echo "selected";}; ?>>Pendiente</option>
                <option value="en proceso" <?php if($result['status_id' == 1]){echo "selected";}; ?>>En proceso</option>
                <option value="terminada" <?php if($result['status_id' == 2]){echo "selected";}; ?>>Terminada</option>
            </select>
            <button type="submit">Editar</button>
        </form>
    </section>
</main>
<?php
include 'partials/footer.php';
?>