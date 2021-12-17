<?php
require_once 'Core/BaseController.php';
require_once 'Models/ProductModel.php';

class DashboardController extends BaseController {
    public function index() {
        $this->view('dashboard/index');
    }

    public function profile() {
        $this->view('dashboard/profile');
    }

    public function products() {
        $this->view('dashboard/products');
    }
} 
?>
