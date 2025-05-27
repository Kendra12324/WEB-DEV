<?php

require_once __DIR__ . '/../model/Product.php';
require_once __DIR__ . '/../model/Sale.php';

class SalesController {
    public function handle($action) {
        switch ($action) {
            case 'index':
                $sales = Sale::getAllSales();
                require __DIR__ . '/../view/sales/index.php';
                break;
            case 'create':
                $products = Product::getAll();
                require __DIR__ . '/../view/sales/create.php';
                break;
            case 'store':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $productId = $_POST['productId'];
                $quantity = $_POST['quantity'];
                $totalAmount = $_POST['totalAmount'];
                $sale = new Sale($productId, $quantity, $totalAmount);
                $sale->save();

                // para decrease sa product sa product list
                Product::decreaseStock($productId, $quantity);
            }
                 header('Location: /sari-sari-store-sys/index.php?controller=sales&action=index');
                 exit();
            default:
                echo "Action not found!";
        }
    }
}
?>