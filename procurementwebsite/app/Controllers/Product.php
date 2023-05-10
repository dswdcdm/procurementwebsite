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
            . view('components/hero')
            . view('pages/product', $productdata)
            . view('components/footer');
    }


    public function productItem($productId)
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'Product specs',
            'userInfo' => $userInfo,
            'productId' => $productId
        ];
        $model = new ProductModel();
        $productdata['producttb'] = $model->findAll();
        $request = \Config\Services::request();
        $productId = $request->uri->getSegment(3);
        return view('components/header', $data)
            . view('components/navbar')
            . view('pages/productitem', $productdata)
            . view('components/footer');
    }

    
    public function searchProduct($productName)
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        
        $model = new ProductModel();
        $productdata['producttb'] = $model->findAll();
        $request = \Config\Services::request();
        $productName = $request->uri->getSegment(3);

        $data = [
            'title' => 'Product specs',
            'userInfo' => $userInfo,
            'productName' => $productName
        ];
        
        return view('components/header', $data)
            . view('components/navbar')
            . view('pages/productitem', $productdata)
            . view('components/footer');
    }

    public function addProduct()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'Product specs',
            'userInfo' => $userInfo
        ];
       
        return view('components/header', $data)
            . view('components/navbar')
            . view('pages/addProduct')
            . view('components/footer');
    }
 
}
