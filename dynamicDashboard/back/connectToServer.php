<?php
session_start();
if (isset($_POST['connection'])) {
    //get instance from class database connection 
    include '../back/dbconn.php';
    $db = new dbconn('');
    //get data from user
    $dbType = $_POST['dbType'];
    $host = $_POST['host'];
    $dbName = $_POST['dbName'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    //send data for db connection
    $db->changeConn($dbType, $host, $dbName, $userName, $password);
    if (is_string($db->conn())) {
        $error = $db->conn();
        $_SESSION['error'] = $error;
        header("location:../view/connection.php");
    } else {
        $_SESSION['db']=[$dbType,$host,$dbName,$userName,$password];
        header("location:../view/dashboard.php");
    }
}
