<?php


require_once __DIR__ . '/../model/Sale.php';

class ReportController {
    public function handle($action) {
        switch ($action) {
            case 'index':
                $sales = [];
                if (isset($_GET['from']) && isset($_GET['to'])) {
                    $sales = Sale::getSalesByDate($_GET['from'], $_GET['to']);
                } else {
                    $sales = Sale::getAllSales();
                }
                require __DIR__ . '/../view/reports/index.php';
                break;
            default:
                echo "Action not found!";
        }
    }
}
