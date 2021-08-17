<?php
include "../include/head.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    echo '<div class="py-5 bg-light text-center m-5">';
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($pass) >= 5) {
        echo "<p class='p-2 shadow-sm'>Email : {$email}</p>";
        echo "<p class='p-2 shadow-sm'>Password : {$pass}</p>";
    } else {
        echo "<p class='p-2 shadow-sm bg-danger'>Wrong Email or Password</p>";
    }
}

include "../include/footer.php";
