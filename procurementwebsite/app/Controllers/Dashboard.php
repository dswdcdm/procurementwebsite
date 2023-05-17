<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\EmployeeModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'Dashboard',
            'userInfo' => $userInfo
        ];
        return view('components/header', $data) 
            . view('components/navbar')
            . view('components/hero')
            . view('components/carousel')
            . view('components/services')
            . view('pages/dashboard', $data)
            . view('components/footer');    
    }


    function profile()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        
        $CartModel = new CartModel();
        $cartData['cart'] = $CartModel->findAll();

      

        $CartModel = new CartModel();
        $cartItems = $CartModel->findAll(); 
        $productPrices = $CartModel->getAllProductPrices();
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item['item_price'] * $item['quantity'];
        }

        $overAllPrice = 0;
        foreach ($productPrices as $product) {
            $overAllPrice += $totalPrice;
        }

        $data = [
            'title' => 'Profile',
            'userInfo' => $userInfo,
            'cartData' => $cartData['cart'],
            'totalPrice' => $totalPrice,
            'overAllPrice' => $overAllPrice
        ]; 
        return view('components/header', $data)
            . view('components/navbar')
            . view('components/hero')
            . view('pages/profile', $data)
            . view('components/footer');
    }


    function updateProfile()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'Profile',
            'userInfo' => $userInfo
        ];
        return view('components/header', $data)
            . view('components/navbar')
            . view('components/hero')
            . view('pages/updateProfile', $data)
            . view('components/footer');
    }

    function directory()
    {
        $userModel = new \App\Models\EmployeeModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'Product',
            'userInfo' => $userInfo
        ];
        $model = new EmployeeModel();
        $employeedata['employee'] = $model->findAll();
        return view('components/header', $data)
            . view('components/navbar')
            . view('components/hero')
            . view('pages/directory', $employeedata)
            . view('components/footer');
    }
}
