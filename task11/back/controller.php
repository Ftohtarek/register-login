<?php
session_start();
include 'dbOperator.php';
include 'validator.php';

class controller
{
    use validator;
    private $cont;
    public function __construct()
    {
        $this->cont = new dbOperator('task11');
        $this->cont->conn();
        $this->cont->setTableName('users');
    }

    public function addRecord($name, $email, $pass, $rePass)
    {
        if ($this->checkPass($pass, $rePass) && $this->emailExist($this->cont, $email)) {

            if ($this->cont->addRecord(['name', 'email', 'password'], [$name, $email, $pass])) {
                $_SESSION['sucuss'][] = 'Register Succuss';
            }
        }
    }

    public function getRecord($name, $pass)
    {
        if ($this->cont->find('name', $name)) {
            $records = $this->cont->getRecordWithCondation(['name'], ["name='$name'", "password='$pass'"]);
            if ($records) {
                $_SESSION['sucuss'][] = 'Login Sucuss Welcome :' . $records[0]['name'];
                return true;
            }
            $this->error[] = 'Wrong Password';
            return 0;
        }
        $this->error[] = 'Wrong Name: ' . $name . ' don\'t match any user';
    }

    public function __destruct()
    {
        $_SESSION['userError'] = $this->error;
    }
}




if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $rePass = $_POST['rePass'];
    $register = new controller();
    $register->addRecord($name, $email, $pass, $rePass);
    header('Location:../index.php');
}

if (isset($_POST['signin'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $register = new controller();
    $register->getRecord($name, $pass);
    header('location:../index.php');
}
