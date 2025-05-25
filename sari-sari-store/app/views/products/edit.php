
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="/sari-sari-store/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sari-sari-store/public/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Product</h2>
        <form action="/sari-sari-store/public/index.php?controller=product&action=update" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" value="<?php echo htmlspecialchars($product['price']); ?>" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="<?php echo htmlspecialchars($product['stock']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
            <a href="/sari-sari-store/public/index.php?controller=product&action=index" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="/sari-sari-store/public/js/jquery.min.js"></script>
    <script src="/sari-sari-store/public/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>