<?php
include("path.php");
session_start();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['admin']);
    session_destroy();
    header('Location: ' . BASE_URL . '/index.php');
?>