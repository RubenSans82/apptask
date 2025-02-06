<?php
include'partials/header_user.php';
if(!(isset($_GET['id']) && isset($_SESSION['user_id']))){
    header('Location: main.php');
}

include'conection.php';

$query = $conection->prepare('SELECT * FROM tasks WHERE tasks_id = :id AND users_id = :user');
$query->bindParam(':id', $_GET['id']);
$query->bindParam(':user', $_SESSION['user_id']);
$query->execute();
if(!$result = $query->fetch()){
    header('Location: main.php');
}

?>

<main>
    <section>
        <h2 class="formTitle" >Editar tarea</h2>
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
            <button style="width: 110px;" class="animatedBtn" type="submit">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-arrow-right-short"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>
            </div>
            <span>Editar</span>
        </button>        </form>
    </section>
</main>
<?php
include 'partials/footer.php';
?>