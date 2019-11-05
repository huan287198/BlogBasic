<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    function doLogin($username, $password){
        if(isValid($username, $password)){
            addSession("auth", md5($password));
            redirect("?route=admin");
            return true;
        }
        return false;
    }

    function isValid ($username, $password){
        $conn = connect_db();
        $sql = "Select * from user where username= '$username' and password='". md5($password). "'";
        $row = fetch_assoc($conn, $sql, 0);
        var_dump($row);
        die;
        if($row){
            return true;
        }
        return false;
    }

    function doLogout(){
        forgetSession("auth");
        redirect("?route=login");
    }