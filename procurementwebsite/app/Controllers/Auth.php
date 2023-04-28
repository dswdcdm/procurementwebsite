<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;

class Auth extends Controller
{
    public function index()
    {
        echo "login page";
    }
    public function register()
    {
        echo "register page";
    }
}
