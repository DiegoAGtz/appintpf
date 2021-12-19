<?php

require 'Core/Connect.php';

class BaseModel {
    private $table;
    protected $db;
 
    public function __construct($table) {
        $this->table = $table;
        $conn = new Connect();
        $this->db = $conn->connection();
    }
    
    public function __destruct() {
        $this->db->close();
    }
     
    public function all() {
        if ($stmt = $this->db->prepare("SELECT * FROM $this->table ORDER BY id DESC")) {
            $stmt->execute();
            $result = $stmt->get_result();
            $resultSet = null;
            while ($row = $result->fetch_assoc()) {
                $resultSet[] = $row;
            }
            $stmt->close();
            return $resultSet;
        }
        return 0;
    }
     
    public function find($id) {
        if ($stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = ?")) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $resultSet = null;
            while ($row = $result->fetch_assoc()) {
                $resultSet = $row;
            }
            $stmt->close();
            return $resultSet;
        }
        return 0;
    }
     
    public function where($column, $value) {
        $query = $this->db->query("SELECT * FROM $this->table WHERE $column = '$value' ORDER BY id DESC");
        $resultSet = null;
        while($row  =  $query->fetch_assoc()) {
           $resultSet[] = $row;
        }
        return $resultSet;
    }
     
    public function delete($id) {
        $query = $this->db->query("DELETE FROM $this->table WHERE id = $id");
        return $query;
    }
}

?>
