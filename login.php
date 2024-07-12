<?php
session_start();
require "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    $total = mysqli_num_rows($result);

    if ($total == 1) {
        $user = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE email = '$email' AND password = '$password'"));

        $_SESSION["userId"] = $user["id"];
        $_SESSION["userName"] = $user["username"];

        header("Location:feed.view.php");
    } else {
        echo "Account not found";
        die();
    }
}

require "login.view.php";
