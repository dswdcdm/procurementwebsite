<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;

class Auth extends Controller
{
    public function index()
    {
        return view('components/header')
            . view('auth/login')
            . view('components/footer');
    }
    public function register()
    {
        return view('components/header')
            . view('auth/register')
            . view('components/footer');
    }
}
