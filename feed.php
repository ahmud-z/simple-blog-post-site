<?php

session_start();

require 'connection.php';

if (isset($_SESSION["userId"])) {
    $userId = $_SESSION["userId"];
    $userName = $_SESSION["userName"];
    $result = mysqli_query($db, "SELECT * FROM posts WHERE is_public = '1' ORDER BY post_id DESC;");
    require "feed.view.php";
} else {
    header("Location: /login");
}
