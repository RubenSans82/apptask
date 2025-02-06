<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppTask</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

</head>

<body>
    <header>
        <div class="topHeader"></div>
        <div class="header">
        <img class="logo" src="img/logo.png" alt="logo">
        <div class="imgUser">
                <?php
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                } else {
                    $username = "Invitado";
                }
                ?>
                <span id="usernameNav"><?php echo $username ?> </span>
                <lord-icon src="https://cdn.lordicon.com/iiudwewg.json" trigger="in" delay="500" state="in-reveal"
                    colors="primary:#109121,secondary:#d1fad7" style="width:80px;height:80px">
                </lord-icon>
                </lord-icon>
            </div>
        </div>
        <nav>
            <ul>
                <div class="navButton">
                    <li><a href="login.php">Iniciar Sesión</a></li>
                </div>
                <div class="navButton">
                    <li><a href="register.php">Registrarse</a></li>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <div id="mainDiv">


            <section class="hero">
                <div class="container">
                    <h1>Bienvenido a AppTask</h1>
                    <p>Tu mejor compañero para gestionar tareas de manera fácil y eficiente.</p>
                    <a href="register.php" class="btn-primary">¡Comienza ahora!</a>
                </div>
            </section>

            <section id="features" class="features">
                <div class="container">
                    <div class="feature">
                        <h2>Características principales</h2>
                        <h3>Registro de Usuario</h3>
                        <p>Crea una cuenta fácil con tu nombre, apellido, username y contraseña.</p>
                        <h3>Gestión de Tareas</h3>
                        <p>Podrás agregar, editar o eliminar tareas de manera rápida.</p>
                        <h3>Privacidad</h3>
                        <p>Solo podrás ver y gestionar tus propias tareas. La privacidad es nuestra prioridad.</p>
                    </div>
                </div>
            </section>

            <section id="about" class="features">
                <div class="feature">
                    <h2>¿Cómo funciona?</h2>
                    <p>AppTask te permite organizar y seguir tus tareas de forma sencilla. Crea tu cuenta, añade tareas,
                        actualiza su estado y ¡listo!</p>
                </div>
            </section>

            <section id="contact" class="features">
                <div class="feature">
                    <h2>Contacto</h2>
                    <p>¿Tienes alguna duda o sugerencia? Contáctanos a través de <a
                            href="mailto:contacto@apptask.com">contacto@apptask.com</a></p>
                </div>
            </section>
        </div>

    </main>
</body>

<footer>
    <p>
    AppTask - "Gael & Ruben" © 2025
    </p>
</footer>
<div id="spark-container"></div> <!-- Contenedor para las chispas -->

</html>