<?php
interface dbDigram
{
    function changeConn($server, $dbName, $userName, $password);
    function conn();
}
class dbconn implements dbDigram
{
    private $server = 'localhost:6000';
    protected $dbName;
    private $userName = 'root';
    private $password = '';
    public function __construct($dbName)
    {
        /* the Default connection is localhost to change use changconn() */
        $this->dbName = $dbName;
    }
    public function changeConn($server, $dbName, $userName, $password)
    {
        $this->server = $server;
        $this->dbName = $dbName;
        $this->userName = $userName;
        $this->password = $password;
    }
    private function checkConnction()
    {
        try {
            return new PDO("mysql:host=$this->server;dbname=$this->dbName", $this->userName, $this->password);
        } catch (PDOException $e) {
            echo 'Connction Error :' . $e->getMessage();
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

    public function __construct(string $dbName, string $tableName)
    {
        parent::__construct($dbName);
        $this->cont = $this->conn();
        $this->tableName = $tableName;
    }
    public function count()
    {
        $rowNumber = $this->cont->prepare("SELECT count(id)  FROM $this->tableName");
        $rowNumber->execute();
        return $rowNumber->fetch()[0];
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
        $records = $this->cont->prepare("SELECT * FROM $this->tableName");
        $records->execute();
        return ($records->fetchAll());
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
