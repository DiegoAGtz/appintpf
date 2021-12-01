<?php
require_once 'Core/BaseController.php';
require_once 'Models/UserModel.php';

class PageController extends BaseController {
    
    public function index() {
        $this->view('index');
    }

    public function products() {
        $this->view('pages/products');
    }

    public function contact() {
        $this->view('pages/contact');
    }

    public function car() {
        $this->view('pages/car');
    }

}
?>
