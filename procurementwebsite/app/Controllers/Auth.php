<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Hash;

class Auth extends Controller
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        $data = [
            'title' => 'login'
        ];
        return view('components/header', $data)
            . view('auth/login');
    }
    public function register()
    {
        $data = [
            'title' => 'register'
        ];
        return view('components/header', $data)
            . view('auth/register');
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
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            $values = [
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)
            ];


            $userModel = new \App\Models\UserModel();
            $query = $userModel->insert($values);
            if (!$query) {
                return redirect()->back()->with('fail', 'Something went wrong');
            } else {
                $last_id = $userModel->insertID();
                session()->set('loggedUser', $last_id);
                return redirect()->to('/pages');
            }
        }
    }

    function check()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Email is Required',
                    'valid_email' => 'Enter a Valid Email',
                    'is_not_unique' => 'Email is not registered'
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
        ]);

        if (!$validation) {
            return view('components/header')
                . view('auth/login', ['validation' => $this->validator])
                . view('components/footer');
        } else {

            $email = $email = $_POST['email'];
            $password  = $_POST['password'];
            $usersModel = new \App\Models\UserModel();
            $user_info = $usersModel->where('email', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if (!$check_password) {
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('auth')->withInput();
            } else {
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('/pages');
            }
        }
    }


    function logout()
    {
        if (session()->has('loggedUser')) {
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail', 'Logged out!');
        }
    }
}
