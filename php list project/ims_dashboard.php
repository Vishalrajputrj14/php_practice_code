    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }

    // File paths
    define('PRODUCTS_FILE', 'products.json');
    define('FEATURES_FILE', 'features.json');
    define('CATEGORIES_FILE', 'categories.json');

    // Load data from JSON files or empty arrays
    $products = file_exists(PRODUCTS_FILE) ? json_decode(file_get_contents(PRODUCTS_FILE), true) : [];
    $features = file_exists(FEATURES_FILE) ? json_decode(file_get_contents(FEATURES_FILE), true) : [];
    $categories = file_exists(CATEGORIES_FILE) ? json_decode(file_get_contents(CATEGORIES_FILE), true) : [];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>IMS Dashboard - All Data</title>
    <link rel="stylesheet" href="style12.css" />

</head>
<body>

<div class="container">
    <div class="top-bar">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
        <a href="logout.php" style="background:#888;">Logout</a>
    </div>

  <!-- Inside dashboard.php -->
<div class="btn-group">
    <a href="add_product.php">➕ Add Product</a>
    <a href="mom.php">📋 View Full Product List</a>
    <a href="add_feature.php">✨ Add Feature</a>
    <a href="add_category.php">🏷️ Add Category</a>
</div>


    <!-- Summary -->
    <div class="summary">
        <strong>Total Products:</strong> <?php echo count($products); ?> |
        <strong>Total Features:</strong> <?php echo count($features); ?> |
        <strong>Total Categories:</strong> <?php echo count($categories); ?>
    </div>

    <!-- Products Table -->
    <h3>Products List</h3>
    <?php if(count($products) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $p): ?>
                <tr>
                    <td><?php echo htmlspecialchars($p['id']); ?></td>
                    <td><?php echo htmlspecialchars($p['name']); ?></td>
                    <td><?php echo htmlspecialchars($p['quantity']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <p>No products found.</p>
    <?php endif; ?>

    <!-- Features Table -->
    <h3>Features List</h3>
    <?php if(count($features) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Feature Name</th><th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($features as $f): ?>
                <tr>
                    <td><?php echo htmlspecialchars($f['id']); ?></td>
                    <td><?php echo htmlspecialchars($f['name']); ?></td>
                    <td><?php echo nl2br(htmlspecialchars($f['description'])); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <p>No features found.</p>
    <?php endif; ?>

    <!-- Categories Table -->
    <h3>Categories List</h3>
    <?php if(count($categories) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $c): ?>
                <tr>
                    <td><?php echo htmlspecialchars($c['id']); ?></td>
                    <td><?php echo htmlspecialchars($c['name']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <p>No categories found.</p>
    <?php endif; ?>

    <div class="footer">Inventory Management System &copy; 2025</div>
</div>

</body>
</html>
