<?php
include('database/connection.php');
session_start();
unset($_SESSION['email']);
unset($_SESSION['name']);
session_destroy();
header("location:login.php");
?>

