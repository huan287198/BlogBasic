<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = connect_db();
function doLogin($username, $password)
{
    if (isValid($username, $password)) {
        addSession("auth", md5($password));
        die("isLoggedIn");
    }
    return false;
}

function isValid($username, $password)
{
    $sql = "Select * from user where user_name= '$username' and password='" . md5($password) . "'";
    $row = fetch_assoc($sql, 1);
    if ($row > 1) {
        return true;
    }
    return false;
}

function doLogout()
{
    forgetSession("auth");
    redirect("?route=login");
}

function registerAccount($user, $email, $password)
{
    $sql = "INSERT INTO user (id, email, mobile, user_name, password, position, avatar, created_at, updated_at) VALUES (NULL, '$email', NULL, '$user', 'MD5($password)', '1', '', CURRENT_TIME(), CURRENT_TIME())";
    if(isValidRegister($user, $email)){
        return query($sql);
    }
    else return false;
}

function isValidRegister($user, $email){
    $sql = "Select * from user where user_name='$user' or email= '$email'";
    $row = num_rows($sql);
    var_dump($row);
    die;
    if($row > 1){
        return false;
    }
    return true;
}

if (isset($_POST["checkLogin"]) && $_POST["checkLogin"] == true) {
    doLogin($_POST["userName"], $_POST["password"]);
    exit();
}

