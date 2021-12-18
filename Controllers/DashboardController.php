<?php
require_once 'Core/BaseController.php';
require_once 'Models/ProductModel.php';
require_once 'Models/SaleModel.php';

class DashboardController extends BaseController {
    public function index() {
        $sale = new SaleModel();
        $purchases = $sale->where('user_id', Auth::info()['id']);
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
        $this->view('dashboard/index', array(
            'shopping' => $shopping,
            'totalProducts' => $totalProducts
        ));
    }

    public function profile() {
        $this->view('dashboard/profile');
    }

    public function products() {
        $product = new ProductModel();
        $products = $product->where('user_id', Auth::info()['id']);
        $this->view('dashboard/products', array(
            'products' => $products
        ));
    }

    public function purchase() {
        $sale = new SaleModel();
        if(isset($_GET['id'])) {
            $products = $sale->products($_GET['id']);
            $this->view('dashboard/purchase', array(
                'products' => $products
            ));
        }
    }

} 
?>
