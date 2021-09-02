<?php
interface dbDigram
{
    function newConn($type, $server, $dbName, $userName, $password);
    function conn();
    function setTableName($tableName);
    function addRecord(array $coulmn, array $records);
}
class dbOperator implements dbDigram
{
    private $dbType = 'mysql';
    private $server = 'localhost:6000';
    private $userName = 'root';
    private $password = '';
    private $dbName;
    private $tableName;
    private $cont;
    private $dbError;


    public function __construct($dbName = null)
    {
        /* the Default connection is localhost to change use newConn() */
        $this->dbName = $dbName;
    }

    public function newConn($dbType, $server, $dbName, $userName, $password)
    {
        /*  i bulid this algorthim to make it possible to change one info as other still default */

        $setting = [$dbType, $server, $dbName, $userName, $password];
        $role = [&$this->dbType, &$this->server, &$this->dbName, &$this->userName, &$this->password];
        for ($i = 0; $i < 5; $i++) {
            if ($setting[$i] == '') {
                continue;
            }
            $role[$i] = $setting[$i];
        }
        return $this->conn();
    }

    public function conn()
    {
        try {
            $this->cont = new PDO("$this->dbType:host=$this->server;dbname=$this->dbName", $this->userName, $this->password);
            return $this->cont;
        } catch (PDOException $e) {
            $this->dbError[] = 'Falid To Connection';
            $this->dbError[] = $e->getMessage();
            return $e->getMessage();
        }
    }

    public function setTableName($tName)
    {
        $tableContent = $this->cont->prepare("EXPLAIN  $tName ");
        if ($tableContent->execute()) {
            $this->tableName = $tName;
            return true;
        }
        $this->dbError[] = 'Falid during Set Table Name';
    }

    public function find($key, $value)
    {
        $rowNumber = $this->cont->prepare("SELECT * FROM $this->tableName WHERE $key=? LIMIT 1 ");
        if ($rowNumber->execute([$value])) {
            if (count($rowNumber->fetchAll()) > 0) {
                return true;
            }
            $this->dbError[] = "Falid No Record by $key =" . $value;
            return false;
        }
        $this->dbError[] = 'Falid In find table and id ';
    }
    
    public function getRecordWithCondation(array $get = ['*'], array $condation = ["1='1'"], $operator = 'and')
    {
        /* 
            *bulid sql of add with condation 
            * note that parameter must like that "col='val' "
        */
        $get = implode(',', $get);
        $condationSql = $condation[0];
        for ($i = 1; $i < count($condation); $i++) {
            $condationSql .= ' ' . strtoupper($operator) . ' ' . $condation[$i];
        }
        $condationSql .='LIMIT 1';

        $records = $this->cont->prepare("SELECT $get FROM $this->tableName WHERE $condationSql ");
        if ($records->execute()) {
            return $records->fetchAll();
        }
        $this->dbError[] = 'Falid during fetch Record';
        return false;
    }

    public function addRecord(array $coulmn, array $records)
    {
        $sql = $this->buildSqlInsertQuery($coulmn);
        $addRecord = $this->cont->prepare("INSERT INTO $this->tableName $sql");
        if ($addRecord->execute($records)) {
            return true;
        }
        $this->dbError[] = 'Falid during Add Record';
    }

    private function buildSqlInsertQuery($col)
    {
        $attr = "$col[0]";
        $value = "?";
        for ($i = 1; $i < count($col); $i++) {
            $attr = $attr . ",$col[$i]";
            $value = $value . ",?";
        }
        $sql = "($attr)VAlUE($value)";
        return $sql;
    }

    public function __destruct()
    {
        $_SESSION['dbError'] = $this->dbError;
    }
}
