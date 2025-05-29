
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Product</title>
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Delete Product</h2>
        <p>Are you sure you want to delete <strong><?php echo htmlspecialchars($product['name']); ?></strong>?</p>
        <form action="/sari-sari-store-sys/index.php?controller=product&action=delete" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
            <button type="submit" class="btn btn-danger" >Yes, Delete</button>
            <a href="http://localhost/sari-sari-store-sys/index.php?controller=product&action=index" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
