<?php
require "connection.php";

session_start();

$Visibility = $_POST["selected"];
$content = $_POST["content"];
$title = $_POST["title"];

$userId = $_SESSION["userId"];



$fileName = $_FILES["uploadImage"]["name"];
$tempFolder = $_FILES["uploadImage"]["tmp_name"];
$localFolder = "./uploads/" . $fileName;

mysqli_query($db, "INSERT INTO posts(user_id, post_title, post_contents, is_public, file_name) values ('$userId', '$title', '$content', '$Visibility', '$fileName')");

if (move_uploaded_file($tempFolder, $localFolder)) {
    
} else {
    
}
