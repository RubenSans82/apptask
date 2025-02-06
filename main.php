<?php
include 'partials/header.php';
include 'conection.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}
?>
<main>
    <h1 class="formTitle">Tareas</h1>
    <div id="createButton"><a href="create.php">Crear tarea</a>
    </div>
    <table>
        <thead>
            <tr>
                <th style="width: 50px;">Nombre</th>
                <th style="width: 500px;">Descripción</th>
                <th style="width: 50px;">Fecha de creación</th>
                <th style="width: 50px;">Estado</th>
                <th style="width: 0px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $conection->prepare("SELECT * FROM tasks AS p LEFT JOIN status AS s ON p.status_id = s.status_id WHERE p.users_id = :user");
            $query->bindParam(":user", $_SESSION["user_id"]);
            $query->execute();
            $tasks = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tasks as $task) {
                ?>
                <tr>
                    <td><?php echo $task['title']; ?></td>
                    <td><?php echo $task['description']; ?></td>
                    <td><?php echo $task['creation_date']; ?></td>
                    <td><?php echo ucfirst($task['status']); ?></td>
                    <td>
                        <a href='edit.php?id=<?php echo $task["tasks_id"]; ?>' class="btnTable"><lord-icon
    src="https://cdn.lordicon.com/vysppwvq.json"
    trigger="hover"
    colors="primary:#30e849,secondary:#0a5c15"
    style="width:25px;height:25px">
</lord-icon></a>
                        <a href='delete.php?id=<?php echo $task["tasks_id"]; ?>' class="btnTable"><lord-icon
    src="https://cdn.lordicon.com/crxdwbpm.json"
    trigger="hover"
    delay="2000"
    colors="primary:#30e849,secondary:#0a5c15"
    style="width:25px;height:25px">
</lord-icon></a>
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