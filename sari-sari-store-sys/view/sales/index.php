
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Transactions</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>

     <div class="mb-3">
        <a href="http://localhost/sari-sari-store-sys/home.php" class="btn btn-success">🏠 Home</a>
    </div>

    <div class="container mt-5">
        <h1>Sales Transactions</h1>
        <a href="/sari-sari-store-sys/index.php?controller=sales&action=create" class="btn btn-primary mb-3">Record New Sale</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Total Amount</th>
                    <th>Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sales as $sale): ?>
                <tr>
                    <td><?php echo $sale->id; ?></td>
                    <td><?php echo $sale->product_id; ?></td>
                    <td><?php echo $sale->total; ?></td>
                    <td><?php echo $sale->sale_date; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
