<?php
include 'partials/header.php';
include 'conection.php';
?>
<main>
    <h1>Crear tarea</h1>
    <form action="store.php" method="POST">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Descripción</label>
        <textarea name="description" id="description"></textarea>
        <label for="status">Estado</label>
        <select name="status" id="status" required>
            <option value="pendiente">Pendiente</option>
            <option value="en proceso">En proceso</option>
            <option value="terminada">Terminada</option>
        </select>
        <button type="submit">Crear tarea</button>
    </form>
</main>
<?php
include 'partials/footer.php';
?>