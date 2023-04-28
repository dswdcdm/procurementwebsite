<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;

class Auth extends Controller
{
    public function index()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
}
