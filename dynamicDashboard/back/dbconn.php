<?php
interface dbDigram
{
    function changeConn($type, $server, $dbName, $userName, $password);
    function conn();
}
class dbconn implements dbDigram
{
    private $dbType = 'mysql';
    private $server = 'localhost:6000';
    protected $dbName;
    private $userName = 'root';
    private $password = '';
    public function __construct($dbName)
    {
        /* the Default connection is localhost to change use changconn() */
        $this->dbName = $dbName;
    }
    public function changeConn($dbType, $server, $dbName, $userName, $password)
    {
        $setting = [$dbType, $server, $dbName, $userName, $password];
        $role = [&$this->dbType, &$this->server, &$this->dbName, &$this->userName, &$this->password];
        for ($i = 0; $i < 5; $i++) {
            if ($setting[$i] == '') {
                continue;
            }
            $role[$i] = $setting[$i];
        }
    }
    private function checkConnction()
    {
        try {
            return new PDO("$this->dbType:host=$this->server;dbname=$this->dbName", $this->userName, $this->password);
        } catch (PDOException $e) {
            // echo 'Connction Error :' . $e->getMessage();
            return $e->getMessage();
        }
    }
    public function conn()
    {
        return $this->checkConnction();
    }
}
class dbOperator extends dbconn
{
    private $cont;
    private $tableName;

    public function __construct(string $dbName=null, string $tableName = null)
    {
        parent::__construct($dbName);
        $this->cont = $this->conn();
        $this->tableName = $tableName;
    }
    public function reconnect()
    {
        $this->cont = $this->conn();
    }
    public function getDatabases(){
        $databases=$this->cont->prepare('SHOW DATABASES');
        $databases->execute();
        return($databases->fetchAll());
    }
    public function count()
    {
        echo $this->dbName;
        $rowNumber = $this->cont->prepare("SELECT count(id)  FROM $this->tableName");
        $rowNumber->execute();
        return $rowNumber->fetch()[0];
    }
    private function convertFetchToIndexArray($arr)
    {
        $newArr = [];
        for ($i = 0; $i < count($arr); $i++) {
            $newArr[] = $arr[$i][0];
        }
        return $newArr;
    }
    private function convertFetchToAssocArray($arr)
    {
        $newArr=[];
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]) / 2; $j++) {
                $newArr[$i][] = $arr[$i][$j];
            }
        }
        return $newArr;
    }
    public function getTables()
    {
        $tables = $this->cont->prepare("SHOW Full TABLES FROM $this->dbName ");
        $tables->execute();
        return $this->convertFetchToIndexArray($tables->fetchAll());
    }
    public function setTableName($tbName)
    {
        $this->tableName = $tbName;
    }
    public function getColumns()
    {
        $cols = $this->cont->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_NAME = '$this->tableName' and TABLE_SCHEMA = '$this->dbName' ");
        $cols->execute();
        return $this->convertFetchToIndexArray($cols->fetchAll());
    }
    public function search($key)
    {
        $rowNumber = $this->cont->prepare("SELECT * FROM $this->tableName where id=? or name=? limit 1 ");
        $rowNumber->execute([$key, $key]);
        return $rowNumber->fetchObject();
    }
    public function addRecord(array $coulmn, array $records)
    {
        try {
            $sql = $this->buildSqlInsertQuery($coulmn);
            $rowNumber = $this->cont->prepare("INSERT INTO $this->tableName $sql");
            $rowNumber->execute($records);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function delete($id)
    {
        if ($this->search($id)) {
            $rowNumber = $this->cont->prepare("DELETE FROM $this->tableName WHERE id=? limit 1");
            $rowNumber->execute([$id]);
        }
    }
    public function updata($id, $coulmn, $value)
    {
        if ($this->search($id)) {
            $sql = $this->buildSqlUpdataQuery($coulmn);
            $rowNumber = $this->cont->prepare("UPDATE $this->tableName SET $sql WHERE id=? limit 1");
            $value[] = $id;
            $rowNumber->execute($value);
        }
    }
    public function fetchAll()
    {
        $records = $this->cont->prepare("SELECT * FROM $this->tableName ");
        $records->execute();
        return $this->convertFetchToAssocArray($records->fetchAll());
    }
    public function getCoulmnDefault($colName)
    {
        $query = "SELECT COLUMN_DEFAULT FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$this->tableName'
        AND COLUMN_NAME = '$colName' AND TABLE_SCHEMA = '$this->dbName' LIMIT 1";
        $colDefault = $this->cont->prepare($query);
        $colDefault->execute();
        return $colDefault->fetch();
    }
    private function buildSqlUpdataQuery($col)
    {
        $sql = "$col[0]=?";
        for ($i = 1; $i < count($col); $i++) {
            $sql = $sql . ",$col[$i]=?";
        }
        return $sql;
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
}
