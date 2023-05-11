<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Downloads;
use App\Models\UserModel;
use App\Models\ProductModel;

class Admin extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

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
            'title' => 'admin',
            'userInfo' => $userInfo,
            'users' =>  $userdata['users'],
            'downloads' => $downloadData['downloads'],
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
            . view('components/admin/userProfile', $userdata)
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
    public function adminaddproduct()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'AddProduct',
            'userInfo' => $userInfo
        ];
        $model = new ProductModel();
        $productdata['producttb'] = $model->findAll();

        return view('components/admin/header', $data)
            . view('components/admin/navbar')
            . view('components/admin/hero')
            . view('pages/addProduct', $productdata)
            . view('components/footer');
    }
    public function adminupdateproduct($productId)
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'UpdateProduct',
            'userInfo' => $userInfo,
            'productId' => $productId
        ];
        $model = new ProductModel();
        $productdata['producttb'] = $model->findAll();
        $request = \Config\Services::request();
        $productId = $request->uri->getSegment(3);

        return view('components/admin/header', $data)
            . view('components/admin/navbar')
            . view('components/admin/hero')
            . view('pages/updateProduct', $productdata)
            . view('components/footer');
    }
    public function viewusers($userid)
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'ViewUser',
            'userInfo' => $userInfo,
            'userid' => $userid
        ];
        $usersmodel = new UserModel();
        $usersdata['users'] = $usersmodel->findAll();
        $request = \Config\Services::request();
        $userid = $request->uri->getSegment(3);

        return view('components/admin/header', $data)
            . view('components/admin/navbar')
            . view('components/admin/hero')
            . view('pages/viewusers', $usersdata)
            . view('components/footer');
    }

    public function updateusers()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $data = [
            'title' => 'UpdateUser',
            'userInfo' => $userInfo
        ];
        $model = new ProductModel();
        $productdata['producttb'] = $model->findAll();

        return view('components/admin/header', $data)
            . view('components/admin/navbar')
            . view('components/admin/hero')
            . view('pages/updateusers')
            . view('components/footer');
    }

    public function saveProduct()
    {
        $files = $this->request->getFiles();
        if (isset($files['image'])) {
            $name = $this->request->getVar('name');
            $descrition = $this->request->getVar('description');
            $price = $this->request->getVar('price');
            $status = $this->request->getVar('status');
            $note = $this->request->getVar('note');
            $msfile = $this->request->getVar('msfile');
            $image = $this->request->getFile('image');
            $file = $this->request->getFile('tsfile');

            $image = $files['image'];
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $newName);

            $values = [
                'name' => $name,
                'descrition' => $descrition,
                'price' => $price,
                'status' => $status,
                'note' => $note,
                'image' => '/uploads/' . $newName
            ];

            $productModel = new ProductModel();
            $query = $productModel->insert($values);

            if (!$query) {
                return redirect()->back()->with('fail', 'something went wrong');
            } else {
                return redirect()->back()->with('success', 'ITEM ADDED UPDATED');
            }
        } else {
            return redirect()->back()->with('fail', 'something went wrong');
        }
    }
}
