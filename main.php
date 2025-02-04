<?php
    include 'partials/header.php';
    include 'conection.php';
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
    }
?>
<main>
    <h1>Tareas</h1>
    <a href="create.php">Crear tarea</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha de creación</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = $conection->prepare("SELECT * FROM tasks WHERE users_id = :user");
                $query->bindParam(":user", $_SESSION["user_id"]);
                $query->execute();
                $tasks = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach ($tasks as $task) {
            ?>
            <tr>
                <td><?php echo $task['name']; ?></td>
                <td><?php echo $task['description']; ?></td>
                <td><?php echo $task['create_date']; ?></td>
                <td><?php echo $task['status']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $task['id']; ?>">Editar</a>
                    <a href="delete.php?id=<?php echo $task['id']; ?>">Eliminar</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</main>
<?php
    include 'partials/footer.php';
?>