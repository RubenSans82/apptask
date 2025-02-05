<?php

include("conection.php");

if(isset($_POST["user_id"])){
    $user_id = $_POST["user_id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $query = $conection->prepare("UPDATE users SET first_name = :first_name, last_name = :last_name WHERE users_id = :user_id");
    $query->bindParam(":user_id", $user_id);
    $query->bindParam("first_name", $first_name);
    $query->bindParam("last_name", $last_name);
    $query->execute();
}

header("Location: main.php");

?>