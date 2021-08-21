<?php
interface dbDigram
{
    function changeConn($server, $dbName, $userName, $password);
    function conn();
}
class dbconn implements dbDigram
{
    private $server = 'localhost:6000';
    private $dbName ;
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
