<?php
require_once 'Core/BaseModel.php';

class SaleModel extends BaseModel {

  public function __construct() {
    parent::__construct("sales");
  }

  public function save($user_id, $date, $products) {
    $this->db->autocommit(false);
    $this->db->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
    try {
      $stmt = $this->db->prepare("INSERT INTO sales(user_id, date) VALUES (?, ?)");
      $stmt->bind_param("is", $user_id, $date);
      $stmt->execute();
      $id = $stmt->insert_id;
      $stmt->close();
      $stmt = $this->db->prepare("INSERT INTO products_sales(product_id, sale_id, amount, price) VALUES (?, ?, ?, ?)");
      foreach ($products as $product) {
        $stmt->bind_param("iiid", $product->id, $id, $product->amount, $product->price);
        $stmt->execute();
      }
      $stmt->close();
      $this->db->commit();
      $this->db->autocommit(true);
      return $id;
    } catch(Exception $e) {
      $this->db->rollback();
      $this->db->autocommit(true);
      echo json_encode(array('msg' => $e->getMessage()));
      return -1;
    }
  }

}

?>
