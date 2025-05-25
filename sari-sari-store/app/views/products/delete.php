
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Product</title>
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Delete Product</h2>
        <p>Are you sure you want to delete <strong><?php echo htmlspecialchars($product['name']); ?></strong>?</p>
        <form action="/sari-sari-store/public/index.php?controller=product&action=delete" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
            <button type="submit" class="btn btn-danger" >Yes, Delete</button>
            <a href="/sari-sari-store/public/index.php?controller=product&action=index" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
