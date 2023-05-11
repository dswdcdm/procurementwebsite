<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;


class Product extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form', 'request']);
    }

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


    public function searchProduct()
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);

        $query = $this->request->getVar('query');
        $data = [
            'title' => 'Product specs',
            'userInfo' => $userInfo,
            'query' => $query
        ];
        $model = new ProductModel();
        $productdata['producttb'] = $model->findAll();

        return view('components/header', $data)
            . view('components/navbar')
            . view('pages/searchProduct', $productdata);
    }

    public function downloadfile()
    {
        $userModel = new \App\Models\UserModel();
        $productModel = new ProductModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
    }

    public function saveProduct()
    {
        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'product name is Required'
                ]
            ]
        ]);

        if (!$validation) {
            return redirect()->back()->with('fail', 'something went wrong');
        } else {
            $name = $this->request->getVar('name');
            $ucname = ucwords($name);
            $descrition = $this->request->getVar('description');
            $price = $this->request->getVar('price');
            $status = $this->request->getVar('status');
            $note = $this->request->getVar('note');
            $msfile = $this->request->getVar('msfile');
            $image = $this->request->getVar('image');
            $file = $this->request->getFile('tsfile');

            $file->move(ROOTPATH . 'public/uploads');
            $values = [
                'name' => $ucname,
                'descrition' => $descrition,
                'price' => $price,
                'status' => $status,
                'note' => $note,
                'ms' => $msfile,
                'ta' => $file->getName(),
                'image' => $image,
                'tafilename' => $file->getName(),
                'tafilepath' => 'public/uploads/' . $file->getName()
            ];

            $productModel = new ProductModel();
            $query = $productModel->insert($values);
            if (!$query) {
                return redirect()->back()->with('fail', 'something went wrong');
            } else {
                return redirect()->to('/admin/addproduct')->with('success', 'ITEM ADDED SUCCESS');
            }
        }
    }
}
