<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function doLogin($username, $password) {
	if (isValid($username, $password)) {
		addSession("auth", md5($password));
		redirect("?route=admin");
		return true;
	}
	return false;
}

function isValid($username, $password) {
	$conn = connect_db();
	// $sql = "Select * from user where username= '$username' and password='" . md5($password) . "'";
	// echo ($sql);
	// $row = fetch_assoc($conn, $sql, 0);
	$sql = "SELECT * FROM admin WHERE user_name = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "'";
	$result = $conn->query($sql); //
	// var_dump($row);
	// die;
	if ($result->num_rows > 0) {
    $user = mysqli_fetch_assoc($result);
    echo($user);
		addSession("login", true);
		addSession("user", $user);
		return true;
	}
	return false;
}

function doLogout() {
	forgetSession("auth");
	forgetSession("login");
	forgetSession("user");
	redirect("?route=login");
}
