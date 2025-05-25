<?php


require_once __DIR__ . '/../models/Product.php';

class ProductController {
    public function handle($action) {
        switch ($action) {
            case 'index':
                $products = Product::getAll();
                require __DIR__ . '/../views/products/index.php';
                break;
            case 'create':
                require __DIR__ . '/../views/products/create.php';
                break;
            case 'store':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $stock = $_POST['stock'];
                    Product::create($name, $price, $stock);
                }
                header('Location: /sari-sari-store/public/index.php?controller=product&action=index');
                exit();
            case 'edit':
                if (isset($_GET['id'])) {
                    $product = Product::getById($_GET['id']);
                    require __DIR__ . '/../views/products/edit.php';
                } else {
                    header('Location: /sari-sari-store/public/index.php?controller=product&action=index');
                    exit();
                }
                break;
            case 'update':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $stock = $_POST['stock'];
                    Product::update($id, $name, $price, $stock);
                }
                header('Location: /sari-sari-store/public/index.php?controller=product&action=index');
                exit();
            case 'delete':
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
                    Product::deleteById($_POST['id']);
                    header('Location: /sari-sari-store/public/index.php?controller=product&action=index');
                    exit();
                } elseif (isset($_GET['id'])) {
                    $product = Product::getById($_GET['id']);
                    if ($product) {
                        require __DIR__ . '/../views/products/delete.php';
                    } else {
                        header('Location: /sari-sari-store/public/index.php?controller=product&action=index');
                        exit();
                    }
                } else {
                    header('Location: /sari-sari-store/public/index.php?controller=product&action=index');
                    exit();
                }
                break;
            default:
                echo "Action not found!";
        }
    }
}