<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommentModel;
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

        $model = new ProductModel();
        $commentModel = new CommentModel();
        $productdata['producttb'] = $model->findAll();
        $productComment['comments'] = $commentModel->findAll();

        $request = \Config\Services::request();
        $productId = $request->uri->getSegment(3);

        $comments = $commentModel->where('post_id', $productId)->findAll();
        $data = [
            'title' => 'Product specs',
            'userInfo' => $userInfo,
            'productId' => $productId,
            'productComments' => $productComment,
            'post' => $productId,
            'comments' => $comments
        ];

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

            $files = $this->request->getFiles();

            $name = $this->request->getVar('name');
            $description = $this->request->getVar('description');
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
                'description' => $description,
                'price' => $price,
                'status' => $status,
                'note' => $note,
                'ms' => $msfile,
                'ta' => $file,
                'image' => '/uploads/' . $newName,
                'imagename' =>  $newName
            ];

            $productModel = new ProductModel();
            $query = $productModel->insert($values);

            if (!$query) {
                return redirect()->back()->with('fail', 'something went wrong');
            } else {
                return redirect()->back()->with('success', 'ITEM ADDED UPDATED');
            }
        }
    }


    public function saveupdateProduct($productId)
    {
        if ($_FILES['image']['size'] == 0) {

            $files = $this->request->getFiles();

            $name = $this->request->getVar('name');
            $description = $this->request->getVar('description');
            $price = $this->request->getVar('price');
            $status = $this->request->getVar('status');
            $note = $this->request->getVar('note');
            $image = $this->request->getVar('hidden_image_name');
            $file = $this->request->getFile('tsfile');
            $msfile = $this->request->getFile('msfile');

            $values = [
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'status' => $status,
                'note' => $note,
                'ms' => $msfile,
                'ta' => $file,
                'image' => '/uploads/' . $image,
                'imagename' =>  $image
            ];

            $productModel = new ProductModel();
            $query = $productModel->update($productId, $values);

            if (!$query) {
                return redirect()->back()->with('fail', 'something went wrong');
            } else {
                return redirect()->back()->with('success', 'ITEM ADDED UPDATED');
            }
        } else if ($_FILES['tsfile']['size'] == 0) {

            $files = $this->request->getFiles();

            $name = $this->request->getVar('name');
            $description = $this->request->getVar('description');
            $price = $this->request->getVar('price');
            $status = $this->request->getVar('status');
            $note = $this->request->getVar('note');
            $image = $this->request->getFile('hidden_image_name');
            $tsfile = $this->request->getFile('tsfile');
            $msfile = $this->request->getFile('hidden_image_tsfile');

            $tsfile = $files['tsfile'];

            $tsfileNewname = $tsfile->getRandomName();
            $tsfile->move(ROOTPATH . 'public/uploads/tsfile', $tsfileNewname);

            $values = [
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'status' => $status,
                'note' => $note,
                'ms' => '/uploads/msfile/' . $msfile,
                'ta' => '/uploads/tsfile/' . $tsfileNewname,
                'msfilename' => $msfile,
                'tsfilename' => $tsfileNewname,
                'image' => '/uploads/' . $image,
                'imagename' =>  $image
            ];

            $productModel = new ProductModel();
            $query = $productModel->update($productId, $values);

            if (!$query) {
                return redirect()->back()->with('fail', 'something went wrong');
            } else {
                return redirect()->back()->with('success', 'ITEM ADDED UPDATED');
            }
        } else if ($_FILES['msfile']['size'] == 0) {
            $files = $this->request->getFiles();

            $name = $this->request->getVar('name');
            $description = $this->request->getVar('description');
            $price = $this->request->getVar('price');
            $status = $this->request->getVar('status');
            $note = $this->request->getVar('note');
            $image = $this->request->getFile('hidden_image_name');
            $tsfile = $this->request->getFile('hidden_image_tsfile');
            $msfile = $this->request->getFile('msfile');

            $msfile = $files['msfile'];

            $msfileNewname = $tsfile->getRandomName();
            $msfile->move(ROOTPATH . 'public/uploads/tsfile', $msfileNewname);

            $values = [
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'status' => $status,
                'note' => $note,
                'ms' => '/uploads/msfile/' . $msfileNewname,
                'ta' => '/uploads/tsfile/' . $tsfile,
                'msfilename' => $msfileNewname,
                'tsfilename' => $tsfile,
                'image' => '/uploads/' . $image,
                'imagename' =>  $image
            ];

            $productModel = new ProductModel();
            $query = $productModel->update($productId, $values);

            if (!$query) {
                return redirect()->back()->with('fail', 'something went wrong');
            } else {
                return redirect()->back()->with('success', 'ITEM ADDED UPDATED');
            }
        } else {

            $files = $this->request->getFiles();

            $name = $this->request->getVar('name');
            $description = $this->request->getVar('description');
            $price = $this->request->getVar('price');
            $status = $this->request->getVar('status');
            $note = $this->request->getVar('note');
            $image = $this->request->getFile('image');
            $tsfile = $this->request->getFile('tsfile');
            $msfile = $this->request->getFile('msfile');

            $image = $files['image'];
            $tsfile = $files['tsfile'];
            $msfile = $files['msfile'];

            $newName = $image->getRandomName();
            $tsfileNewname = $tsfile->getRandomName();
            $msfileNewname = $msfile->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $newName);
            $tsfile->move(ROOTPATH . 'public/uploads/tsfile', $tsfileNewname);
            $msfile->move(ROOTPATH . 'public/uploads/msfile', $msfileNewname);

            $values = [
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'status' => $status,
                'note' => $note,
                'ms' => '/uploads/msfile/' . $msfileNewname,
                'ta' => '/uploads/tsfile/' . $tsfileNewname,
                'msfilename' => $msfileNewname,
                'tsfilename' => $tsfileNewname,
                'image' => '/uploads/' . $newName,
                'imagename' =>  $newName
            ];

            $productModel = new ProductModel();
            $query = $productModel->update($productId, $values);

            if (!$query) {
                return redirect()->back()->with('fail', 'something went wrong');
            } else {
                return redirect()->back()->with('success', 'ITEM ADDED UPDATED');
            }
        }
    }


    public function submitComment($productId)
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
            $user_id = $this->request->getVar('user_id');
            $text = $this->request->getVar('text');

            $values = [
                'name' => $name,
                'user_id' => $user_id,
                'post_id' => $productId,
                'text' => $text,
            ];

            $productComment = new CommentModel();
            $query = $productComment->insert($values);

            if (!$query) {
                return redirect()->back()->with('fail', 'something went wrong');
            } else {
                return redirect()->back()->with('success', 'comment success');
            }
        }
    }


    public function delete($id)
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);

        $commentModel = new CommentModel();
        $comment = $commentModel->find($id);

        if ($comment && $comment['user_id'] == $userInfo['id']) {
            $commentModel->delete($id);
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Unable to delete comment.');
        }
    }
}
