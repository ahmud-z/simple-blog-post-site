<?php

session_start();

if (isset($_SESSION["userId"])) {
    require "profile.view.php";
} else {
    header("Location:login.php");
}
