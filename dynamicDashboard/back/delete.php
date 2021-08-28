<?php
session_start();
include 'dbconn.php';
if ($_GET['key'] && $_GET['$tableName']) {
    $dbInfo = $_SESSION['db'];
    $db = new dbOperator('');
    $db->changeConn($dbInfo[0], $dbInfo[1], $dbInfo[2], $dbInfo[3], $dbInfo[4]);
    $db->reconnect();
    $tableName = $_GET['$tableName'];
    $db->setTableName($tableName);
    $db->delete($_GET['key']);
    header("location:../view/dashboard.php?table=$tableName");
}
