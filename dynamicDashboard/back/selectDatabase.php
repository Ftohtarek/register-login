<?php
include '../doc/function.php';
if (isset($_POST['selectDatabase'])) {
    session_start();
    $_SESSION['db'][2] = $_POST['database'];
    unset($_SESSION['db']['tableName']);
    header('location:../view/dashboard.php');
}
