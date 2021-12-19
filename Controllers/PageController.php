<?php
require_once 'Core/BaseController.php';
require_once 'Models/ProductModel.php';
require_once 'Models/UserModel.php';

class PageController extends BaseController {
    private $product;

    public function __construct() {
        $this->product = new ProductModel();
    }

    public function index() {
        $this->view('index');
    }

    public function products() {
        $user = new UserModel();
        $products = $this->product->all();
        if($products != null) {
            for($i=0; $i<count($products); $i++) {
                $products[$i]['username'] = $user->find($products[$i]['user_id'])['name'];
            }
        }
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
