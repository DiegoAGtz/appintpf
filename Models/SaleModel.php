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

  public function total($id) {
    if($stmt = $this->db->prepare("SELECT COUNT(ps.id) AS total, co.cost
      FROM products_sales ps
      INNER JOIN (SELECT sale_id, SUM(amount*price) AS cost FROM products_sales GROUP BY sale_id) co 
      ON co.sale_id = ps.sale_id
      WHERE ps.sale_id=? ORDER BY ps.sale_id DESC")) {
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $result = $stmt->get_result();
      $resultSet = null;
      while ($row = $result->fetch_assoc()) {
        $resultSet[] = $row;
      }
      $stmt->close();
      return $resultSet;
    }
  }

  public function products($id) {
    if($stmt = $this->db->prepare("SELECT s.date, ps.amount, ps.price, p.id, p.name
      FROM sales s 
      INNER JOIN products_sales ps
      ON s.id = ps.sale_id
      INNER JOIN products p
      ON p.id = ps.product_id
      WHERE s.id=? ORDER BY s.id DESC")) {
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $result = $stmt->get_result();
      $resultSet = null;
      while($row = $result->fetch_assoc()) {
        $resultSet[] = $row;
      }
    }
    $stmt->close();
    return $resultSet;
  }

}

?>
