<?php
    function initSession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    function addSession($key, $value)
    {
        initSession();
        $_SESSION[$key] = $value;
    }

    function forgetSession($key)
    {
        initSession();
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);//Hủy Sessions
        }
    }

    function hasSession($key)
    {
        initSession();
        return isset($_SESSION[$key]);

    }

    function getSession($key)
    {
        initSession();
        return hasSession($key) ? $_SESSION[$key] : "";
    }
