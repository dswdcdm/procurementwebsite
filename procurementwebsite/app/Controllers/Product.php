<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'profile'

        ];
        return view('components/header', $data)
            . view('components/navbar')
            . view('pages/product')
            . view('components/footer');
    }
}
