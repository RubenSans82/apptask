<?php

include("partials/header_reg.php");

?>
<main>
    <h1>Iniciar sesión</h1>
    <form action="logincheck.php" method="POST">
        <label for="user">Usuario</label>
        <input type="user" name="user" id="user" required>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Iniciar sesión</button>
    </form>
</main>
<?php
include("partials/footer.php");
?>
