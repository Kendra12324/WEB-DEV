<?php

$controller = $_GET['controller'] ?? 'product';
$action = $_GET['action'] ?? 'index';

switch ($controller) {
    case 'product':
        require_once __DIR__ . '/controller/ProductController.php';
        $ctrl = new ProductController();
        break;
    case 'sales':
        require_once __DIR__ . '/controller/SalesController.php';
        $ctrl = new SalesController();
        break;
    case 'report':
        require_once __DIR__ . '/controller/ReportController.php';
        $ctrl = new ReportController();
        break;
    default:
        die('Controller not found');
}
$ctrl->handle($action);