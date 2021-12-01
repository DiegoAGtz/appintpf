<?php
require_once 'Core/BaseModel.php';

class ProductModel extends BaseModel {

  public function __construct() {
    parent::__construct("products");
  }

  public function save($name, $price, $description, $images) {
    if ($stmt = $this->db->prepare("INSERT INTO products(name, price, description, images) VALUES (?, ?, ?, ?)")) {
      $stmt->bind_param("ssss", $name, $price, $description, $images);
      $stmt->execute();
      return $stmt->insert_id;
    }
  }

}

?>
