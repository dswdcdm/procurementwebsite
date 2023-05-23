<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\EmployeeModel;
use App\Models\UserModel;
use TCPDF;

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
       
        $data = [
            'title' => 'Profile',
            'userInfo' => $userInfo,
            'cartData' => $cartData['cart'],
            'totalPrice' => $totalPrice
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
    

    function proceed($user_id)
    {
        $userModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);
        $CartModel = new CartModel();
        $cartData['cart'] = $CartModel->findAll();

        $data = [
            'title' => 'Profile',
            'userInfo' => $userInfo,
            'user_id' => $user_id,
            'cartData' => $cartData['cart']
        ];
        
        return view('components/header', $data)
            . view('components/navbar')
            . view('components/hero')
            . view('pages/proceed', $data)
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


    public function generatePDF($userid)
    {

        $CartModel = new CartModel();
        $cartData['cart'] = $CartModel->findAll();
        $cartItems = $CartModel->findAll(); 
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item['item_price'] * $item['quantity'];
        }

        $cartData =  $cartData['cart'];
       
        $data = [
            'title' => 'Profile',
            'totalPrice' => $totalPrice
        ]; 

      
        // Create new PDF instance
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8');

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Printable PDF');
        $pdf->SetSubject('Printing PDF in CodeIgniter 4');
        $pdf->SetKeywords('PDF, CodeIgniter 4, Printing');

        // Add a page
        $pdf->AddPage();

        // Set some content in the PDF
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(0, 10, 'BILL OF QUANTITIES.', 0, 1);
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(0, 10, 'DATE.', 0, 1);
        $pdf->Cell(0, 10, 'REQUESTED BY.', 0, 1);
        $pdf->Cell(0, 10, 'OFFICE NAME.', 0, 1);
        foreach ($cartData as $cartitem) {
            if ($cartitem['user_id'] == $userid) {
                $pdf->Cell(0,10,$cartitem['quantity'] . '---------'.'1'. '---------' . $cartitem['item_name'] . '---------'. $cartitem['item_price'].'---------' . $cartitem['item_price'] * $cartitem['quantity']   ,0,1);
            }
        }
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(0, 10, 'GRAND TOTAL .' . $totalPrice , 0, 1);    
        $pdf->SetFont('helvetica', '', 12);

        // Output the PDF as a download
        $pdf->Output('technicalSpecification.pdf', 'D');
    }
}
