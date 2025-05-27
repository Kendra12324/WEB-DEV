
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Sale</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Create Sale</h2>
    <form action="/sari-sari-store-sys/index.php?controller=sales&action=store" method="POST">
        <div class="form-group">
            <label for="productId">Product</label>
            <select class="form-control" id="productId" name="productId" required>
                <option value="">-- Select Product --</option>
                <?php foreach ($products as $product): ?>
                    <option value="<?= htmlspecialchars($product['id']) ?>" data-price="<?= htmlspecialchars($product['price']) ?>">
                        <?= htmlspecialchars($product['name']) ?>
                    </option>
                <?php endforeach; ?>
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
        <a href="/sari-sari-store-sys/index.php?controller=sales&action=index" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<script src="../../js/jquery.min.js"></script>
<script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    // Auto-calculate total amount
    document.addEventListener('DOMContentLoaded', function() {
        const productSelect = document.getElementById('productId');
        const quantityInput = document.getElementById('quantity');
        const totalAmountInput = document.getElementById('totalAmount');

        function updateTotal() {
            const price = parseFloat(productSelect.options[productSelect.selectedIndex].getAttribute('data-price')) || 0;
            const qty = parseInt(quantityInput.value) || 0;
            totalAmountInput.value = (price * qty).toFixed(2);
        }

        productSelect.addEventListener('change', updateTotal);
        quantityInput.addEventListener('input', updateTotal);
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>