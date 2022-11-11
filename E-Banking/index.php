<?php

session_start();
if(isset($_SESSION["Username"])) {
    header("Location: View/Dashboard.php");
} else {
    header("Location: View/Login.php");
}