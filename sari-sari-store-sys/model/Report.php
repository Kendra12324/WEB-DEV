<?php

class Report {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function fetchSalesData($startDate, $endDate) {
        $query = "SELECT * FROM sales WHERE date >= :startDate AND date <= :endDate";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':startDate', $startDate);
        $stmt->bindParam(':endDate', $endDate);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function generateMonthlyReport($month, $year) {
        $startDate = "$year-$month-01";
        $endDate = date("Y-m-t", strtotime($startDate));
        return $this->fetchSalesData($startDate, $endDate);
    }
}
?>