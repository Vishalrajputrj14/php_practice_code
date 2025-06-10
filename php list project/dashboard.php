<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

define('PRODUCTS_FILE', 'products.json');
define('FEATURES_FILE', 'features.json');
define('CATEGORIES_FILE', 'categories.json');

$products = file_exists(PRODUCTS_FILE) ? json_decode(file_get_contents(PRODUCTS_FILE), true) : [];
$features = file_exists(FEATURES_FILE) ? json_decode(file_get_contents(FEATURES_FILE), true) : [];
$categories = file_exists(CATEGORIES_FILE) ? json_decode(file_get_contents(CATEGORIES_FILE), true) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Dashboard - All Data</title>
<style>
  /* Reset and base */
  * {
    box-sizing: border-box;
  }
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f0f2f5;
    margin: 0;
    padding: 30px 15px;
    color: #333;
  }
  .container {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
  }
  h2 {
    color: #e91e63;
    margin-bottom: 0;
    font-weight: 700;
  }
  .top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
  }
  .top-bar a.logout-btn {
    background: #555;
    color: #fff;
    padding: 10px 18px;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }
  .top-bar a.logout-btn:hover {
    background: #333;
  }

  .btn-group {
    margin-bottom: 30px;
  }
  .btn-group a {
    display: inline-block;
    margin-right: 14px;
    padding: 12px 22px;
    background: #e91e63;
    color: white;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(233, 30, 99, 0.4);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }
  .btn-group a:hover {
    background: #c2185b;
    box-shadow: 0 6px 15px rgba(194, 24, 91, 0.5);
  }

  .summary {
    font-weight: 700;
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 40px;
    border-bottom: 2px solid #e91e63;
    padding-bottom: 12px;
  }

  section.data-card {
    background: #fafafa;
    border-radius: 12px;
    padding: 20px 25px;
    margin-bottom: 40px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
  }

  section.data-card h3 {
    color: #e91e63;
    margin-bottom: 20px;
    border-left: 5px solid #e91e63;
    padding-left: 12px;
    font-weight: 700;
  }

  table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px;
  }
  thead tr {
    background: #fce4ec;
    border-radius: 12px;
  }
  th, td {
    padding: 14px 18px;
    text-align: left;
  }
  th {
    font-weight: 700;
    color: #a91d57;
  }
  tbody tr {
    background: white;
    box-shadow: 0 2px 6px rgba(0,0,0,0.06);
    border-radius: 8px;
    transition: background-color 0.2s ease;
  }
  tbody tr:hover {
    background: #fce4ec;
  }
  tbody tr td {
    border-bottom: none;
    border-radius: 8px;
  }

  /* Responsive */
  @media (max-width: 640px) {
    .top-bar, .btn-group {
      flex-direction: column;
      align-items: flex-start;
    }
    .top-bar h2 {
      margin-bottom: 12px;
    }
    .btn-group a {
      margin-bottom: 12px;
    }
  }
</style>
</head>
<body>
<div class="container">

  <div class="top-bar">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
    <a href="logout.php" class="logout-btn">Logout</a>
  </div>

  <div class="btn-group">
    <a href="add_product.php">+ Add Product</a>
    <a href="mom.php">📋 View Full Product List</a>
    <a href="add_feature.php">+ Add Feature</a>
    <a href="add_category.php">+ Add Category</a>
  </div>

  <div class="summary">
    Total Products: <?php echo count($products); ?> &nbsp;&nbsp;|&nbsp;&nbsp;
    Total Features: <?php echo count($features); ?> &nbsp;&nbsp;|&nbsp;&nbsp;
    Total Categories: <?php echo count($categories); ?>
  </div>

  <section class="data-card">
    <h3>Products</h3>
    <?php if (count($products) > 0): ?>
    <table>
      <thead>
        <tr><th>ID</th><th>Name</th><th>Quantity</th></tr>
      </thead>
      <tbody>
        <?php foreach ($products as $p): ?>
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
  </section>

  <section class="data-card">
    <h3>Features</h3>
    <?php if (count($features) > 0): ?>
    <table>
      <thead>
        <tr><th>ID</th><th>Feature Name</th><th>Description</th></tr>
      </thead>
      <tbody>
        <?php foreach ($features as $f): ?>
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
  </section>

  <section class="data-card">
    <h3>Categories</h3>
    <?php if (count($categories) > 0): ?>
    <table>
      <thead>
        <tr><th>ID</th><th>Category Name</th></tr>
      </thead>
      <tbody>
        <?php foreach ($categories as $c): ?>
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
  </section>

</div>
</body>
</html>
