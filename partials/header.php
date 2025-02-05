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
        <div class="header">
            <a href="" class="logo"><img src="img/logo.png" alt="logo"></a>
            <div class="imgUser">
                <lord-icon src="https://cdn.lordicon.com/iiudwewg.json" trigger="in" delay="500" state="in-reveal"
                    colors="primary:#109121,secondary:#d1fad7" style="width:80px;height:80px">
                </lord-icon>
            </div>
        </div>
        <nav>
            <ul>
                <?php
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                } else {
                    $username = "Invitado";
                }
                ?>
                <li id="usernameNav" ><?php echo $username ?> </li>
                <div class="navButton">
                    <li><a href="edituser.php">Perfil de usuario</a></li>
                </div>
                <div class="navButton">
                    <li><a href="logout.php">Logout</a></li>
                </div>
            </ul>
        </nav>
    </header>