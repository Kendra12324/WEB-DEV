<?php

class ReportController extends Controller
{
    public function generateMonthlyReport($month, $year)
    {
        // Fetch sales data for the specified month and year
        $reportModel = $this->loadModel('Report');
        $salesData = $reportModel->getSalesData($month, $year);

        // Load the report view and pass the sales data
        $this->loadView('reports/index', ['salesData' => $salesData]);
    }
}