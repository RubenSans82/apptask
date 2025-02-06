<?php

include("partials/header_reg.php");

?>
<main>
    <h1 class="formTitle">Registro</h1>
    <form action="registercheck.php" method="POST">
        <div> <label for="user">Usuario</label>
            <input type="text" name="user" id="user" required>
        </div>
        <div> <label for="first_name">Nombre</label>
            <input type="text" name="first_name" id="first_name" required>
        </div>
        <div> <label for="last_name">Apellidos</label>
            <input type="text" name="last_name" id="last_name" required>
        </div>
        <div> <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div> <label for="password2">Repetir contraseña</label>
            <input type="password" name="password2" id="password2" required>
        </div>
        <button class="animatedBtn" type="submit">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-arrow-right-short"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>
            </div>
            <span>Registrarse</span>
        </button>
    </form>
</main>
<?php
include("partials/footer.php");
?>