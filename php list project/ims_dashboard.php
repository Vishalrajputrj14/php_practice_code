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
<!-- <style>
      body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(-45deg, #0f2027, #203a43, #2c5364);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
    color: #fff;
  }

  @keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  .container {
    max-width: 1200px;
    margin: auto;
    padding: 40px 20px;
    backdrop-filter: blur(10px);
  }

  .top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,255,255,0.2);
    margin-bottom: 30px;
  }

  .top-bar h2 {
    font-size: 1.8rem;
    text-shadow: 0 0 10px rgba(255,255,255,0.3);
  }

  .top-bar a {
    padding: 10px 20px;
    background: linear-gradient(45deg, #ff00cc, #3333ff);
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    box-shadow: 0 0 10px rgba(255,0,255,0.3);
    transition: transform 0.3s ease;
  }

  .top-bar a:hover {
    transform: scale(1.05);
  }

  .btn-group {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    margin-bottom: 30px;
  }

  .btn-group a {
    flex: 1;
    text-align: center;
    padding: 15px;
    background: rgba(255,255,255,0.1);
    border-radius: 12px;
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    box-shadow: 0 0 15px rgba(0,255,255,0.2);
    transition: background 0.3s ease, transform 0.3s ease;
  }

  .btn-group a:hover {
    background: rgba(255,255,255,0.2);
    transform: translateY(-3px);
  }

  .summary {
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 30px;
    font-size: 1.1rem;
    box-shadow: 0 0 10px rgba(255,255,255,0.2);
  }

  h3 {
    margin-top: 40px;
    font-size: 1.5rem;
    border-bottom: 2px solid rgba(255,255,255,0.2);
    padding-bottom: 10px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    background: rgba(255,255,255,0.05);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 0 15px rgba(0,255,255,0.1);
  }

  th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid rgba(255,255,255,0.1);
  }

  th {
    background: rgba(255,255,255,0.1);
    color: #00ffff;
    text-transform: uppercase;
    font-size: 0.9rem;
  }

  tr:hover {
    background: rgba(255,255,255,0.1);
  }

  .footer {
    text-align: center;
    margin-top: 50px;
    font-size: 0.9rem;
    color: #ccc;
    padding: 20px;
    border-top: 1px solid rgba(255,255,255,0.1);
  }
</style> -->
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
