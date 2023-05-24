<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\EmployeeModel;
use App\Models\ProductModel;
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

    function cart()
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
            'title' => 'Cart',
            'userInfo' => $userInfo,
            'cartData' => $cartData['cart'],
            'totalPrice' => $totalPrice
        ]; 
        return view('components/header', $data)
            . view('components/navbar')
            . view('components/hero')
            . view('pages/cart', $data)
            . view('components/footer');
    }

    function historycart()
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
            'title' => 'History',
            'userInfo' => $userInfo,
            'cartData' => $cartData['cart'],
            'totalPrice' => $totalPrice
        ]; 
        return view('components/header', $data)
            . view('components/navbar')
            . view('components/hero')
            . view('pages/transactionhistory', $data)
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
            'title' => 'Directory',
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

     // Create new TCPDF object
     $pdf = new TCPDF();
     $cellPaddingTop = 10;
     $cellMarginBottom = 10;

     // Set document properties

     $pdf->SetCreator(PDF_CREATOR);
     $pdf->SetAuthor('Your Name');
     $pdf->SetTitle('Printable PDF');
     $pdf->SetSubject('Printing PDF in CodeIgniter 4');
     $pdf->SetKeywords('PDF, CodeIgniter 4, Printing');

     $imageFile = base_url('assets/images/logob.png');
     $x = 50; // X-coordinate of the top-left corner of the image
     $y = 50; // Y-coordinate of the top-left corner of the image
     $width = 100; // Width of the image
     $height = 75; // Height of the image
     $type = 'JPG'; // Image type (optional, default: determined by file extension)
     $link = 'https://www.dswd.gov.ph/'; 

     $pdf->Image($imageFile, $x, $y, $width, $height, $type, $link);
     // Add a new page
     $pdf->AddPage();
   /*   $imageFile = ('assets/images/dswdlogo.jpg');
     $imageX = ('10');
     $imageY =  ('10');
     $imageWidth = ('50');
     $imageHeight = ('50');
     $pdf->Image($imageFile, $imageX, $imageY, $imageWidth, $imageHeight); */
     $pdf->SetFont('helvetica', 'B', 12);
     $pdf->Cell(0, $cellPaddingTop, 'BILL OF QUANTITIES', 0, 1, 'C');
     $lineY = $pdf->GetY(); 
     $pdf->Line(10, $lineY, $pdf->getPageWidth() - 10, $lineY); 
     $pdf->Cell(0, $cellMarginBottom, '', 0, 1, 'C');
     $pdf->SetFont('helvetica', '', 12);
   
     // Create a table
     $pdf->Cell(0, 0, 'Date : ', 1, 1, 'L');
     $pdf->Cell(0, 0, 'Requested by : ', 1, 1, 'L');
     $pdf->Cell(0, 0, 'Office Name : ', 1, 1, 'L');
     $pdf->Ln();

     $header = array('QTY', 'UNIT', 'DESCRIPTION', 'UNITCOST', 'TOTAL');
     $data = array();
     
        foreach ($cartData as $cartItem) {
            $priceWithPeso = 'Php ' . $cartItem['item_price'];
            $totalPrice =  $cartItem['item_price'] * $cartItem['quantity'];
            $data[] = array(
                $cartItem['quantity'],
                'unit',
                $cartItem['item_name'],
                $priceWithPeso,
                'Php '.$totalPrice
            );
        }
     array('', '', '', 'GRAND TOTAL', $totalPrice);

     $pdf->SetFillColor(255, 255, 255);
     $pdf->SetTextColor(0);
     $pdf->SetDrawColor(0);
     $pdf->SetFont('', 'B');

     $columnWidths = array(13, 15, 100, 30, 30); // Set the desired width for each column
        foreach ($header as $key => $col) {
            $pdf->Cell($columnWidths[$key], 7, $col, 1, 0, 'C', 1);
        }

        $pdf->Ln();

        // Data rows
        $pdf->SetFont('');
        foreach ($data as $row) {
            foreach ($row as $key => $col) {
                $pdf->Cell($columnWidths[$key], 6, $col, 1, 0, 'L');
            }
            $pdf->Ln();
        }

     // Output the PDF
     $pdf->Output('example.pdf', 'I');
        // Output the PDF as a download
        $pdf->Output('technicalSpecification.pdf', 'D');
    }


    public function delete_items()
    {
        $selectedItems = $this->request->getPost('selected_items');
        
        if (!empty($selectedItems)) {

            $ProductModel = new ProductModel();
            foreach ($selectedItems as $itemId) {
                $ProductModel->where('id', $itemId)->delete();
            }
            
            echo 'Selected items deleted successfully.';
        } else {
            echo 'No items selected.';
        }
    }
}
