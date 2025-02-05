<?php

include("partials/header_user.php");

if (isset($_SESSION['user_id'])) {
    include 'conection.php';
    $query = $conection->prepare("SELECT * FROM users WHERE users_id = :id");
    $query->bindParam(':id', $_SESSION['user_id']);
    $query->execute();
    $user = $query->fetch();
}

?>

<main>
    <h1 class="formTitle">Editar Usuario</h1>
    <form action="storeedituser.php" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $user['users_id'] ?>">
        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" id="first_name" value="<?php echo $user['first_name'] ?>">
        <label for="last_name">Apellidos</label>
        <input type="text" name="last_name" id="last_name" value="<?php echo $user['last_name'] ?>">
        <button type="submit">Editar</button>
    </form>
</main>