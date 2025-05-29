<?php

if (!isset($products) || !is_array($products)) {
    $products = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
     
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

        <div class="mb-3">
        <a href="http://localhost/sari-sari-store-sys/home.php" class="btn btn-success">🏠 Home</a>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Product List</h1>
        <a href="/sari-sari-store-sys/index.php?controller=product&action=create" class="btn btn-primary mb-3">Add New Product</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product['id']); ?></td>
                        <td><?php echo htmlspecialchars($product['name']); ?></td>
                        <td><?php echo number_format($product['price'], 2); ?></td>
                        <td><?php echo htmlspecialchars($product['stock']); ?></td>
                        <td>

                        <a href="/sari-sari-store-sys/index.php?controller=product&action=edit&id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/sari-sari-store-sys/index.php?controller=product&action=delete&id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="../../public/js/jquery.min.js"></script>
    <script src="../../public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
