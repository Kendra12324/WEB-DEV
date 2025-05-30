
<!DOCTYPE html>
<html>
<head>
    <title>Sales Report</title>
 
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-home {
         background-color: #28a745;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
    }
        .btn-home:hover {
        background-color:rgb(19, 92, 35);
        color: #fff;
    }
    </style>

</head>
<body>

     <div class="d-flex gap-2 mb-3">
        <a href="http://localhost/sari-sari-store-sys/home.php" class="btn btn-success">🏠 Home</a>
        <a href="http://localhost/sari-sari-store-sys/index.php?controller=sales&action=index" class="btn btn-success">Transaction </a>
        <a href="http://localhost/sari-sari-store-sys/index.php?controller=product&action=index" class="btn btn-success">Product</a>
    </div>      

<div class="container mt-5">
    <h2>Sales Report</h2>
    <form method="get" action="/sari-sari-store-sys/index.php">
        <input type="hidden" name="controller" value="report">
        <input type="hidden" name="action" value="index">
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="from" class="form-control" required>
            </div>
            <div class="col">
                <input type="date" name="to" class="form-control" required>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>No. of Transactions</th>
                <th>Date</th>
                <th>Total Sales</th> 
        </thead>
        <tbody>
            <?php foreach ($sales as $sale): ?>
            <tr>
                <td><?= $sale->id ?></td>
                <td><?= $sale->product_id ?></td>
                <td><?= htmlspecialchars($sale->product_name) ?></td> 
                <td><?= $sale->quantity ?></td> 
                <td><?= date('Y-m-d', strtotime($sale->sale_date)) ?></td>
                <<td>₱<?= number_format($sale->total, 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
