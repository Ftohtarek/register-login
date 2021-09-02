<?php
interface validity
{
    function check(array $arr1, array $arr2);
}
class valdiator implements validity
{
    private $error;
    private $conn;

    public function __construct($conn = null)
    {
        $this->conn = $conn;
    }
    private function checkStringInput($str)
    {
        if (is_string($str) && strlen($str) > 3) {
            $str = removeslashes($str);
            return true;
        }
        $this->error[] = "$str invalid Input";
    }
    private function emailExist($email)
    {
        $getEmail = $this->conn->prepare('SELECT email FROM user WHERE email=?');
        $getEmail->execute([$email]);
        $getEmail = $getEmail->fetch()[0];
        if (!$getEmail) {
            return true;
        }
        $this->error[] = 'Email is Exist';
        return true;
    }
    private function email($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        $this->error[] = 'Email Format Must => example@mail.com';
    }
    private function pass($pass)
    {
        if (strlen($pass) > 7) {
            return true;
        }
        $this->error[] = 'password must contain 8 charcter';
    }
    public function check(array $rules, array $value)
    {
        foreach ($rules as $key => $function) {
            try {
                $this->$function($value[$key]);
            } catch (Error $e) {
                echo 'Error In Argument' . $e;
            }
        }
        return $this->error;
    }
}
