<?php
require_once 'Core/BaseModel.php';

class SaleModel extends BaseModel {
  public function __construct() {
    parent::__construct("sales");
  }

  public function save($user_id, $date) {
      if ($stmt = $this->db->prepare("INSERT INTO sales(user_id, date) VALUES (?, ?)")) {
          $stmt->bind_param("is", $user_id, $date);
          $stmt->execute();
          $id = $stmt->insert_id;
          $stmt->close();
          return $id;
      }
      return -1;
  }

}

?>
