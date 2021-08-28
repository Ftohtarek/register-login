<?php
session_start();
include '../include/header.php';
include '../back/dbconn.php';
include '../doc/function.php';
// variable need to declare it
$tables = [];
$tableColumns = [];
$tableRecords = [];
// get database info from session and send it for dboperator object 
if (!isset($_SESSION['db'])) {
    header('location:connection.php');
}


$dbInfo = $_SESSION['db'];
$db = new dbOperator('');
$db->changeConn($dbInfo[0], $dbInfo[1], $dbInfo[2], $dbInfo[3], $dbInfo[4]);
$db->reconnect();
$database = $db->getDatabases();
// get tables in this data base
$tables = $db->getTables();
// if open table get it's coulmns name and records
if (isset($_GET['table'])) {
    $tableName = $_GET['table'];
    $_SESSION['db']['tableName'] = $tableName;
    $db->setTableName($tableName);
    $tableColumns = $db->getColumns();
    $tableRecords = $db->fetchAll();
}
?>

<div class="container-fluid">
    <?php include '../include/designComponent/pageHead.php' ?>
    <div class="row justify-content-center bg-light py-2">
        <h4><?php echo $_SESSION['db'][2] ?> Database </h4>
    </div>
    <div class="row shadow-lg my-5 py-5 mx-2">
        <?php include '../include/designComponent/tablesDesign.php' ?>
        <div class="col-md-10">
            <?php include '../include/designComponent/addRecordDesign.php' ?>
            <?php include '../include/error.php' ?>
            <table class="table table-striped">
                <?php include '../include/designComponent/tableHead.php' ?>
                <?php include '../include/designComponent/tableBody.php' ?>
            </table>
        </div>
    </div>
</div>