<?php

if(isset($_POST["user"])){
    include("conection.php");
    $user = $_POST["user"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $query = $conection->prepare("INSERT INTO users (username, first_name, last_name, password) VALUES (:user, :first_name, :last_name, :password)");
    $query->bindParam(":user", $user);
    $query->bindParam(":first_name", $first_name);
    $query->bindParam(":last_name", $last_name);
    $query->bindParam(":password", $password);
    $query->execute();
    header("Location: login.php");
    exit();
}
header("Location: register.php");
?>