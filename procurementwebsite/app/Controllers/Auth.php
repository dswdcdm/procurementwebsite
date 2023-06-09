<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Hash;
use App\Models\UserModel;
use OTPHP\TOTP;


$session = \Config\Services::session();


class Auth extends Controller
{
    public function __construct()
    {
        helper(['url', 'form', 'request']);
    }
    public function index()
    {
        $data = [
            'title' => 'login'
        ];
        return view('components/header', $data)
            . view('auth/login');
    }

    public function forgotpassword()
    {
        $data = [
            'title' => 'login'
        ];
        return view('components/header', $data)
            . view('auth/forgotpassword');
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

        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Full name is Required'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'address is Required'
                ]
            ],
            'phone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'phone is Required'
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

            $files = request()->getFiles();
            //register user into dswd user db
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $image = $_POST['image'];

            $allowed_domains = array('gmail.com', 'gmail.com');
            $domain = explode('@', $email);
            $domain = end($domain);

            $values = [
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'phone' => $phone,
                'password' => Hash::make($password),
                'image' => $image
            ];

            if (!in_array($domain, $allowed_domains)) {
                return redirect()->back()->with('fail', 'email not valid');
            } else {
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
            $data = [
                'title' => 'invalid login'
            ];
            return view('components/header', $data)
                . view('auth/login', ['validation' => $this->validator]);
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
                if ($user_info['is_admin'] === 'admin') {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/pages');
                }
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

    function otp()
    {
        $data = [
            'title' => 'otp'
        ];
        return view('components/header', $data)
            . view('auth/onetimepassword');
    }
    function sendResetPasswordEmail()
    {
        $otpCode = [];
        for ($i = 0; $i < 4; $i++) {
            $otpCode[] = random_int(1, 100); // Generate a random number between 1 and 100
        }
        // Use the generated random numbers as needed
        $otp  = implode(', ', $otpCode);

        $email = $_POST['email'];

        $userModel = new UserModel();
        $user = $userModel->findByEmailOrUsername($email);

        if (!$user) {
            return redirect()->back()->with('fail', 'no user found');
        }
        $emailService = \Config\Services::email();
        $emailService->setFrom('dswdcmd@gmail.com', 'DSWD CDM BGMD');
        $emailService->setTo('markbrvaldez@gmail.com');
        $emailService->setSubject('Password Reset OTP');
        $emailService->setMessage("Your OTP code is: $otp");
        $emailService->send();
        return redirect()->to('/user/otp');
    }
}
