<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'Product',
            'userInfo' => $userInfo
        ];
        $model = new ProductModel();
        $productdata['producttb'] = $model->findAll();
        return view('components/header', $data)
            . view('components/navbar')
            . view('pages/product', $productdata)
            . view('components/footer');
    }
}
