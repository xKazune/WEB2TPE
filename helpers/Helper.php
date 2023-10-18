<?php

namespace helpers;

class Helper
{

    function __construct()
    {

    }

    public static function isLogged() {
        session_start();
        if (isset($_SESSION['username'])) {
            session_abort();
            return true;
        } else {
            session_abort();
            return false;
        }
    }
}