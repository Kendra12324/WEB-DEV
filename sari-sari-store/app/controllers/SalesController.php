<?php

class SalesController extends Controller
{
    public function recordSale()
    {
        // Logic to record a sale transaction
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'];
            $quantity = $_POST['quantity'];
            $totalAmount = $_POST['total_amount'];

            $sale = new Sale();
            $sale->productId = $productId;
            $sale->quantity = $quantity;
            $sale->totalAmount = $totalAmount;

            if ($sale->save()) {
                // Redirect or return success message
            } else {
                // Handle error
            }
        }

        // Load the create sale view
        $this->view('sales/create');
    }

    public function listSales()
    {
        // Logic to list all sales transactions
        $saleModel = new Sale();
        $sales = $saleModel->getAllSales();

        // Load the sales index view with sales data
        $this->view('sales/index', ['sales' => $sales]);
    }
}