<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {

        return view('components/header')
            . view('components/navbar')
            . view('pages/dashboard')
            . view('components/footer');
    }
}
