<?php
include 'dbconn.php';
$conn = new dbconn('form');

if (isset($_POST['register'])) {
    /* get data from user   */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $conn = $conn->conn();
    $register = new auth($email, $pass, $conn);
    $register = $register->register($name, $gender);
    /* if register function return by error push error to screen */
    if (is_array($register)) {
        $errors = $register;
        include 'include/error.php';
    } else {
        $alart = 'Register Sucuss';
        include 'include/alart.php';
    }
} elseif (isset($_POST['login'])) {
    /* get data from user and instance from   */
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conn = $conn->conn();
    $login = new auth($email, $pass, $conn);
    $login = $login->login();
    /* if return value true alart true if false that mean the email or password wrong or not Exist if therer are error push it to screen  */
    if ($login == 'true') {
        $alart = 'Login Sucuss';
        include 'include/alart.php';
    } elseif (is_array($login)) {
        $errors = $login;
        include 'include/error.php';
    } else {
        $errors = ['Email or password Wrong'];
        include 'include/error.php';
    }
}
