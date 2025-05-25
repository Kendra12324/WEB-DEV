<?php


require_once __DIR__ . '/../../config/config.php';

class Product {
    private static function getDB() {
        $database = new Database();
        return $database->getConnection();
    }

    public static function getAll() {
        $conn = self::getDB();
        $stmt = $conn->prepare("SELECT * FROM products");
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    public static function getById($id) {
        $conn = self::getDB();
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product;
    }

    public static function create($name, $price, $stock) {
        $conn = self::getDB();
        $stmt = $conn->prepare("INSERT INTO products (name, price, stock) VALUES (?, ?, ?)");
        $stmt->execute([$name, $price, $stock]);
    }

    public static function update($id, $name, $price, $stock) {
        $conn = self::getDB();
        $stmt = $conn->prepare("UPDATE products SET name = ?, price = ?, stock = ? WHERE id = ?");
        $stmt->execute([$name, $price, $stock, $id]);
    }

    public static function deleteById($id) {
        $conn = self::getDB();
        $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>