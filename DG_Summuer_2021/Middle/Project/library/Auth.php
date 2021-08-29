<?php

require 'models/User.php';

class Auth
{
    public static function login($user)
    {
        setcookie('user', $user['id']);
    }

    public static function logout()
    {
        setcookie('user', 1, 1);
    }

    public static function getLoggedUser()
    {
        if ($_COOKIE['user']) {
            $user = new User();
            $loggedUser = $user->findById($_COOKIE['user']);

            return $loggedUser;
        }

        return null;
    }
}