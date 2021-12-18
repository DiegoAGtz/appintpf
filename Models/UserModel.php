<?php
require_once 'Core/BaseModel.php';

class UserModel extends BaseModel {

  public function __construct() {
    parent::__construct("users");
  }

  public function save($name, $email, $password, $avatar) {
    if ($stmt = $this->db->prepare("INSERT INTO users(name, email, password, avatar) VALUES (?, ?, ?, ?)")) {
      $stmt->bind_param("ssss", $name, $email, md5($password), $avatar);
      $stmt->execute();
      $id = $stmt->insert_id;
      $stmt->close();
      return $id;
    }
    return -1;
  }

  public function registered($email, $password) {
    if ($stmt = $this->db->prepare("SELECT id FROM users WHERE email = ? AND password = ?")) {
      $stmt->bind_param("ss", $email, md5($password));
      $stmt->execute();
      $stmt->bind_result($id);
      $stmt->fetch();
      $stmt->close();
      return $id;
    }
    return -1;
  }

  public function change($name, $email, $id) {
    if($stmt = $this->db->prepare("UPDATE users SET name=?, email=? WHERE id=?")) {
      $stmt->bind_param("ssi", $name, $email, $id);
      $id_modified = $stmt->execute();
      $stmt->close();
      return $id_modified;
    }
    return -1;
  }

  public function changeAvatar($newAvatar, $id) {
    if($stmt = $this->db->prepare("UPDATE users SET avatar=? WHERE id=?")) {
      $stmt->bind_param("si", $newAvatar, $id);
      $id_modified = $stmt->execute();
      $stmt->close();
      return $id_modified;
    }
    return -1;
  }

  public function changePassword($newPassword, $id) {
    if($stmt = $this->db->prepare("UPDATE users SET password=? WHERE id=?")) {
      $stmt->bind_param("si", md5($newPassword), $id);
      $id_modified = $stmt->execute();
      $stmt->close();
      return $id_modified;
    }
    return -1;
  }

}

?>
