<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Downloads;
use App\Models\UserModel;
use App\Models\ProductModel;

class Admin extends BaseController
{
    public function index()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
    
        $model = new UserModel();
        $downloadModel = new Downloads();
        $productModel = new ProductModel();

        $userNumber['usersNumber'] = $model->countRows();
        $productNumber['productNumber'] = $productModel->countRows();
        
        $downloadData['downloads'] = $downloadModel->findAll();
        $userdata['users'] = $model->findAll();

        $data = [
            'title' => 'ADMIN',
            'userInfo' => $userInfo,
            'users' =>  $userdata['users'],
            'downloads'=> $downloadData['downloads'],
            'usercount' => $userNumber['usersNumber'],
            'productCount' => $productNumber['productNumber']
        ];
        return view('components/admin/header', $data)
            . view('components/admin/navbar')  
            . view('components/admin/hero', $data)
            . view('components/admin/dashboard', $data)
            . view('components/admin/footer');
    }

    public function userProfile()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'user Profile',
            'userInfo' => $userInfo
        ];
        $model = new UserModel();
        $userdata['users'] = $model->findAll();
        return view('components/admin/header', $data)
            . view('components/admin/navbar')
            . view('components/admin/hero')
            . view('components/admin/userProfile',$userdata)
            . view('pages/dashboard', $data)
            . view('components/admin/footer');
    }
    public function adminproduct()
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

        return view('components/admin/header', $data)
            . view('components/admin/navbar')
            . view('components/admin/hero')
            . view('components/admin/adminproduct', $productdata)
            . view('components/footer');
    }
}
