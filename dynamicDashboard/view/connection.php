<?php
session_start();
include '../include/header.php';
include '../back/dbconn.php';
// 
include '../include/designComponent/connectionDesign.php';
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    include '../include/designComponent/errorDesign.php';
}
$_SESSION['error']=null;
include '../include/footer.php';
