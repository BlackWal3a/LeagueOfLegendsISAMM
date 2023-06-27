<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password-confirm"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $password, $password_confirm) !== false) {
        header("location: ../sign-up.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../sign-up.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../sign-up.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($password, $password_confirm) !== false) {
        header("location: ../sign-up.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username,$email) !== false) {
        header("location: ../sign-up.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);
} 

else {
    header("location: ../sign-up.php");
    exit();
}
