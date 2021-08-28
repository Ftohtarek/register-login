<?php
session_start();
include 'dbconn.php';
include '../doc/function.php';
if (isset($_POST['add'])) {

    $dbInfo = $_SESSION['db'];
    $tableName = $dbInfo['tableName'];
    $tableColumns = $_SESSION['addCoulmn'];

    for ($i = 0; $i < count($tableColumns); $i++) {
        $value = $_POST[$tableColumns[$i]];
        if ($value != null) {
            $columns[] = $tableColumns[$i];
            $records[] = $value;
        }
    }
    $db = new dbOperator();
    $db->changeConn($dbInfo[0], $dbInfo[1], $dbInfo[2], $dbInfo[3], $dbInfo[4]);
    $db->reconnect();
    $db->setTableName($tableName);
    try{
        $db->addRecord($columns, $records);
    } catch (Error $e) {
        $_SESSION['error']='Please Enter Valid Record';
    }

    header("location:../view/dashboard.php?table=$tableName");
}
