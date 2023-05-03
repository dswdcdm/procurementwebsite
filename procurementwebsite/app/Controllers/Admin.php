<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Admin extends BaseController
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
        return view('components/admin/header', $data)
            . view('components/admin/navbar')
            . view('pages/dashboard', $data);
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
            . view('components/admin/userProfile',$userdata)
            . view('pages/dashboard', $data);
    }
}
