<?php
    function initSession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    function add($key, $value)
    {
        initSession();
        $_SESSION[$key] = $value;
    }

    function forget($key)
    {
        initSession();
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);//Hủy Sessions
        }
    }

    function has($key)
    {
        initSession();
        return isset($_SESSION[$key]);

    }

    function get($key)
    {
        initSession();
        return has($key) ? $_SESSION[$key] : "";
    }
