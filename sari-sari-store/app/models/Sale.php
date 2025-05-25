<?php

class Sale {
    private $id;
    private $productId;
    private $quantity;
    private $totalAmount;

    public function __construct($productId, $quantity, $totalAmount) {
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->totalAmount = $totalAmount;
    }

    public function getId() {
        return $this->id;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getTotalAmount() {
        return $this->totalAmount;
    }

    public function save() {
        // Code to save the sale transaction to the database
    }

    public static function getAllSales() {
        // Code to retrieve all sales transactions from the database
    }

    public static function getSaleById($id) {
        // Code to retrieve a specific sale transaction by ID from the database
    }

    public function delete() {
        // Code to delete the sale transaction from the database
    }
}