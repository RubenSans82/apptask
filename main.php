<?php
    include 'header.php';
    include 'conection.php';
?>
<main>
    <h1>Tareas</h1>

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
                $query = $conection->prepare("SELECT * FROM tasks");
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
    include 'footer.php';
?>