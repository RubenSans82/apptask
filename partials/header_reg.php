<?php
session_start();
?>

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
                <lord-icon src="https://cdn.lordicon.com/iiudwewg.json" trigger="hover"
                    colors="primary:#109121,secondary:#d1fad7" style="width:80px;height:80px">
                </lord-icon>
            </div>
        </div>
        <nav>
            <ul>
                </div>
                <div class="navButton">
                    <li><a href="index.php">Volver</a></li>
                </div>
            </ul>
        </nav>
    </header>