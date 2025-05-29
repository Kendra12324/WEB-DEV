<?php
require_once __DIR__ . '/../config/database.php';



class Sale {
    public $id;
    public $productId;
    public $quantity;
    public $total;
    public $sale_date;

   
    public function __construct($productId = null, $quantity = null, $total = null) {
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->total = $total; //kkk
    }


    public function save() {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("INSERT INTO sales (product_id, quantity, total, sale_date) VALUES (?, ?, ?, NOW())");
        return $stmt->execute([$this->productId, $this->quantity, $this->total]);
    }

    public static function getAllSales() {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->query("SELECT sales.*, products.name AS product_name 
                          FROM sales 
                          JOIN products ON sales.product_id = products.id 
                          ORDER BY sale_date DESC");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getSaleById($id) {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM sales WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function deleteById($id) {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("DELETE FROM sales WHERE id = ?");
        return $stmt->execute([$id]);
    }
       
    public static function getSalesByDate($from, $to) {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("SELECT sales.*, products.name AS product_name 
                            FROM sales 
                            JOIN products ON sales.product_id = products.id 
                            WHERE DATE(sale_date) BETWEEN ? AND ? 
                            ORDER BY sale_date DESC");
        $stmt->execute([$from, $to]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
