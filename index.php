<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "admin/configs/general.php";
include_once "admin/helper/session.php";
include_once "admin/helper/redirect.php";
include_once "admin/database/database.php";

$conn = connect_db();

include './admin/includes/header.php';

$route = $_GET['route'] ?? 'route';

switch ($route) {
    case 'register':
        include './admin/core/Authentication/register.php';
        break;
    case 'login':
        include './admin/core/Authentication/login.php';
        break;
    case "auth":
        include_once "admin/helper/auth.php";
        break;
    case 'admin':
    default:
        include './admin/core/Authentication/admin.php';
        break;
}

include './admin/includes/footer.php';
