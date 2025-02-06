<?php

include("partials/header_reg.php");

?>
<main>
    <h1 class="formTitle">Iniciar sesión</h1>
    <form class="inputField" action="logincheck.php" method="POST">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user" required>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
        <button class="animatedBtn" type="submit">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>
            </div>
            <span>Iniciar Sesión</span>
        </button>
    </form>
</main>
<?php
include("partials/footer.php");
?>
