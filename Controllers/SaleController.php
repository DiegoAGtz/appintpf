<?php
require_once 'Core/BaseController.php';
require_once 'Models/SaleModel.php';

class SaleController extends BaseController {
    private $sale;

    public function __construct() {
        $sale = new SaleModel();
    }

    public function create() {
        if($_POST['user_id'])
    }
}

?>
