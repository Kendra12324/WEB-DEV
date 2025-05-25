<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Sale</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Create Sale</h2>
        <form action="/sari-sari-store-management/sales/store" method="POST">
            <div class="form-group">
                <label for="productId">Product</label>
                <select class="form-control" id="productId" name="productId" required>
               
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="totalAmount">Total Amount</label>
                <input type="text" class="form-control" id="totalAmount" name="totalAmount" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Record Sale</button>
            <a href="/sari-sari-store-management/sales" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>