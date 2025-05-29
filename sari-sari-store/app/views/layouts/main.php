
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sari-Sari Store Management</title>
    <link rel="stylesheet" href="/sari-sari-store/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sari-sari-store/public/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Sari-Sari Store </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/sari-sari-store/public/index.php?controller=product&action=index">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sari-sari-store/public/index.php?controller=sales&action=index">Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sari-sari-store/public/index.php?controller=reports&action=index">Reports</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <?php include($view); ?>
    </main>

    <footer class="text-center mt-4">
        <p>&copy; <?php echo date("Y"); ?> Sari-Sari Store Management System</p>
    </footer>

    <script src="/sari-sari-store/public/js/jquery.min.js"></script>
    <script src="/sari-sari-store/public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/sari-sari-store/public/js/main.js"></script>
</body>
</html>