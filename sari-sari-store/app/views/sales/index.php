<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Transactions</title>
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Sales Transactions</h1>
        <a href="create.php" class="btn btn-primary mb-3">Record New Sale</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sales as $sale): ?>
                <tr>
                    <td><?php echo $sale->id; ?></td>
                    <td><?php echo $sale->productId; ?></td>
                    <td><?php echo $sale->quantity; ?></td>
                    <td><?php echo $sale->totalAmount; ?></td>
                    <td><?php echo $sale->date; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="../../public/js/jquery.min.js"></script>
    <script src="../../public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/js/main.js"></script>
</body>
</html>