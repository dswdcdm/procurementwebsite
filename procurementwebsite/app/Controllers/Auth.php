<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;

class Auth extends Controller
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('components/header')
            . view('auth/login')
            . view('components/footer');
    }
    public function register()
    {
        return view('components/header')
            . view('auth/register')
            . view('components/footer');
    }

    public function submitRegister()
    {
        /*  $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length [5] |max_length[12]',
            'cpassword' => 'required|min_length[5] | max_length [12] | matches [password]'
        ]); */


        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Full name is Required'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email is Required',
                    'valid_email' => 'Enter a Valid Email',
                    'is_unique' => 'Email already taken'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'Password is Required',
                    'min_length' => 'Password must have atleast 5 characters in length',
                    'max_length' => 'Password must not have characters more than 12 in length'
                ]
            ],

            'cpassword' => [
                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                'errors' => [
                    'required' => 'Confirm Password is Required',
                    'min_length' => 'Password must have atleast 5 characters in length',
                    'max_length' => 'Password must not have characters more than 12 in length',
                    'matches' => 'password Did not match'
                ]
            ],

        ]);

        if (!$validation) {
            return view('components/header')
                . view('auth/register', ['validation' => $this->validator])
                . view('components/footer');
        } else {
            //register user into dswd user db
            $name = $this->request->getPost('name');
        }
    }
}
