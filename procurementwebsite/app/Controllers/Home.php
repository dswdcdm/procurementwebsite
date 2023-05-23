<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        $data = [
            'title' => 'login'
        ];
        return view('components/header', $data)
            . view('auth/login');
    }
}
