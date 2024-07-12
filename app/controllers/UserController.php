<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class UserController extends Controller
{
    public function login()
    {
        View::render('user/login');
    }

    public function register()
    {
        View::render('user/register');
    }
}
