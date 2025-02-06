<?php
include 'partials/header.php';
include 'conection.php';
?>
<main>
    <h1 class="formTitle" >Crear tarea</h1>
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
        <button style="width: 110px;" class="animatedBtn" type="submit">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-arrow-right-short"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>
            </div>
            <span>Crear</span>
        </button>
    </form>
</main>
<?php
include 'partials/footer.php';
?>