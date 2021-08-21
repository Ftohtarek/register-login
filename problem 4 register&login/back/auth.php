<?php
include 'back/valdiator.php';
interface authValidity
{
    function register($name, $gender);
    function login();
}
class auth implements authValidity
{
    private $conn;
    private $email;
    private $pass;
    private $validation;
    public function __construct($email, $pass, $databaseConnection)
    {
        $this->email = $email;
        $this->pass = $pass;
        $this->conn = $databaseConnection;
        $this->validation = new valdiator($this->conn);
    }
    private function addRow($name, $gender)
    {
        /* insert data into user table */
        $addUser = $this->conn->prepare('INSERT INTO user (name,email,password,gender) VALUE(?,?,?,?)');
        $addUser->execute([$name, $this->email, $this->pass, $gender]);
    }
    private function checkExist()
    {
        /* search in data for if name and password is exist */
        $user = $this->conn->prepare('SELECT * FROM user WHERE email=? AND password=?');
        $user->execute([$this->email, $this->pass]);
        $user = $user->fetchObject();
        return $user;
    }
    public function register($name, $gender)
    {
        /* frist call check method form valdator class if return value not contain error then add row */
        $error = $this->validation->check(['name', 'email', 'emailExist', 'pass'], [$name, $this->email, $this->email, $this->pass]);
        if ($error == null) {
            $this->addRow($name, $gender);
            return true;
        }
        return $error;
    }
    public function login()
    {
        /* frist call check method form valdator class if return value not contain error check email and password are true  */
        $error = $this->validation->check(['email', 'pass'], [$this->email, $this->pass]);
        if ($error == null) {
            $user = $this->checkExist();
            if ($user) {
                return 'true';
            }
            return false;
        }
        return $error;
    }
}
