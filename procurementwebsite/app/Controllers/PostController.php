<?php

namespace App\Controllers;
use App\Models\CommentModel;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class PostController extends BaseController
{
    public function submitComment()
    {
      /*   $commentModel = new CommentModel();
        
        $validation = \Config\Services::validation();
        $validation->setRules([
            'post_id' => 'required',
            'text' => 'required'
        ]);
        
        if ($validation->withRequest($this->request)->run()) {
            $commentModel->insert([
                'user_id' => session()->get('user_id'),
                'post_id' => $this->request->getPost('post_id'),
                'text' => $this->request->getPost('text')
            ]);
        }
        
        return redirect()->to('/Product/'.$this->request->getPost('post_id')); */
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
            $post_id = $this->request->getVar('post_id');
            $text = $this->request->getVar('text');

            $values = [
                'name' => $name,
                'user_id' =>$user_id,
                'post_id' =>$post_id,
                'text' =>$text,
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
}
