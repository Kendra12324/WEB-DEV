
<!DOCTYPE html>
<html>
<head>
    <title>Sales Report</title>
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sales as $sale): ?>
            <tr>
                <td><?= $sale->id ?></td>
                <td><?= $sale->product_id ?></td>
                <td><?= htmlspecialchars($sale->product_name) ?></td> 
                <td><?= $sale->total ?></td>
                <td><?= date('Y-m-d', strtotime($sale->sale_date)) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>