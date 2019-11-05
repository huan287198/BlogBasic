<?php
function redirect($route)
{
    header("Location: " . HOME_URL . $route);
    exit();
}