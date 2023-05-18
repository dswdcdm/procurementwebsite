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


    public function generatePDF()
    {
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
        $pdf->Cell(0, 10, 'This is a printable PDF generated using CodeIgniter 4 and TCPDF.', 0, 1);
        $pdf->Cell(0, 10, 'SAMPLE BABABLABLABDADHAKDADADHAHDAHDAHDHASKJSAHDSAHDSAHKJDSADHSKSL.', 0, 1);
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(0, 10, 'SAMPLE LINE AJDLASDSJAJLK.', 0, 1);    
        $pdf->SetFont('helvetica', '', 12);

        // Output the PDF as a download
        $pdf->Output('printable_pdf.pdf', 'D');
    }
}
