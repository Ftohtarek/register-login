<?php
include 'dbconn.php';
if ($_GET['key']) {
    $user = new dbOperator('ecommerce', 'user');
    $user->delete($_GET['key']);
    header('location:../dashboard.php');
}
