<?php
require_once 'Core/BaseController.php';
require_once 'Models/SaleModel.php';

class SaleController extends BaseController {
  private $sale;

  public function __construct() {
    $this->sale = new SaleModel();
  }

  public function create() {
    $data = json_decode(file_get_contents('php://input'), true); 
    if($data != null) {
      header("Content-type: application/json");
      if($this->sale->save($data['user_id'], $data['date'], json_decode($data['products']))) {
        echo json_encode(array('msg' => 'Todo bien'));
      }
    } else {
      echo json_encode(array('err' => 'No hay json'));
    }
  }

}

?>
