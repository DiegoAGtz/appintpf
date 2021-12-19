<?php
require_once 'Core/BaseController.php';
require_once 'Models/ProductModel.php';
require_once 'Models/SaleModel.php';

class DashboardController extends BaseController {
    public function index() {
        if(Auth::loggedIn()) {
            $sale = new SaleModel();
            $purchases = $sale->where('user_id', Auth::info()['id']);
            $shopping = null;
            $totalProducts = null;
            if($purchases != null) {
                foreach ($purchases as $purchase) {
                    $totalProducts[] = $sale->total($purchase['id']);
                }
                foreach ($totalProducts as $key => $total) {
                    $shopping[] = array(
                        'id' => $purchases[$key]['id'],
                        'date' => $purchases[$key]['date'],
                        'totalProducts' => $totalProducts[$key][0]['total'],
                        'totalCost' => $totalProducts[$key][0]['cost']
                    );
                }
            }
            $this->view('dashboard/index', array(
                'shopping' => $shopping,
                'totalProducts' => $totalProducts
            ));
        } else {
            $this->redirect('Auth', 'login');
        }
    }

    public function profile() {
        if(Auth::loggedIn()) {
            $this->view('dashboard/profile');
        } else {
            $this->redirect('Auth', 'login');
        }
    }

    public function products() {
        if(Auth::loggedIn()) {
            $product = new ProductModel();
            $products = $product->where('user_id', Auth::info()['id']);
            $this->view('dashboard/products', array(
                'products' => $products
            ));
        } else {
            $this->redirect('Auth', 'login');
        }
    }

    public function purchase() {
        if(Auth::loggedIn()) {
            $sale = new SaleModel();
            if(isset($_GET['id'])) {
                $products = $sale->products($_GET['id']);
                $this->view('dashboard/purchase', array(
                    'products' => $products
                ));
            }
        } else {
            $this->redirect('Auth', 'login');
        }
    }

    public function addProduct() {
        if(Auth::loggedIn()) {
            $this->view('dashboard/addProduct');
        } else {
            $this->redirect('Auth', 'login');
        }
    }

    public function update() {
        if(Auth::loggedIn()) {
            if(isset($_GET['id'])) {
                $product = new ProductModel();
                $products = $product->find($_GET['id']);
                $this->view('dashboard/addProduct', array(
                    'product' => $products
                ));
            }
        } else {
            $this->redirect('Auth', 'login');
        }
    }
} 
?>
