<?php
require_once 'Core/BaseController.php';
require_once 'Models/ProductModel.php';

class PageController extends BaseController {
    private $product;

    public function __construct() {
        $this->product = new ProductModel();
    }

    public function index() {
        $this->view('index');
    }

    public function products() {
        $products = $this->product->all();
        $this->view('pages/products', array(
            "products" => $products
        ));
    }

    public function contact() {
        $this->view('pages/contact');
    }

    public function car() {
        if(Auth::loggedIn())
            $this->view('pages/car');
        else 
            $this->redirect('Auth', 'login');
    }

}
?>
