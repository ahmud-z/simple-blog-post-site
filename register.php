<?php
require "connection.php";
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE email = '$email'");
    $total = mysqli_num_rows($result);

    if ($total < 1) {
        mysqli_query($db, "INSERT INTO users(username, email, password) VALUES ('$username', '$email' ,'$password')");
        $user = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE email = '$email' AND password = '$password'"));

        $_SESSION["userId"] = $user["id"];
        $_SESSION["userName"] = $user["username"];
        header("Location: feed.php");

        die();
    } else {
        echo "email already exist";
    }
}


require "register.view.php";
