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
        <button style="width: 110px;" class="animatedBtn" type="submit">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-arrow-right-short"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>
            </div>
            <span>Editar</span>
        </button>
    </form>
</main>
<?php
include("partials/footer.php");
?>