<?php

include("partials/header_reg.php");

?>
<main>
    <h1>Registrarse</h1>
    <form action="registercheck.php" method="POST">
        <label for="user">Usuario</label>
        <input type="user" name="user" id="user" required>
        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" id="first_name">
        <label for="last_name">Apellidos</label>
        <input type="text" name="last_name" id="last_name">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
        <label for="password2">Repetir contraseña</label>
        <button type="submit">Registrarse</button>
    </form> 
</main>
<?php
include("partials/footer.php");
?>

