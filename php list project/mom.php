  <?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header("Location: index.php");
      exit();
  }

  define('PRODUCTS_FILE', 'products.json');

  // Load products
  $products = file_exists(PRODUCTS_FILE) ? json_decode(file_get_contents(PRODUCTS_FILE), true) : [];

  // Handle delete request
  if (isset($_GET['delete_id'])) {
      $delete_id = intval($_GET['delete_id']);
      $products = array_filter($products, fn($p) => $p['id'] !== $delete_id);
      $products = array_values($products);
      file_put_contents(PRODUCTS_FILE, json_encode($products, JSON_PRETTY_PRINT));
      header("Location: view_products.php");
      exit();
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8" />
  <title>View Full Product List</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f0f2f5; padding: 20px; }
    .container { max-width: 900px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
    h2 { color: #e91e63; margin-bottom: 25px; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 12px; border-bottom: 1px solid #ddd; text-align: left; }
    th { background-color: #fce4ec; color: #a91d57; }
    tr:hover { background-color: #f9c4d5; }
    a.delete-btn {
      background: #e91e63;
      color: white;
      padding: 6px 14px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    a.delete-btn:hover {
      background: #b31546;
    }
    a.back-link {
      display: inline-block;
      margin-top: 20px;
      color: #555;
      text-decoration: none;
      font-weight: 600;
    }
    a.back-link:hover {
      text-decoration: underline;
    }
  </style>
  </head>
  <body>
    <div class="container">
      <h2>Full Product List</h2>
      <?php if (count($products) > 0): ?>
      <table>
        <thead>
          <tr><th>ID</th><th>Name</th><th>Quantity</th><th>Action</th></tr>
        </thead>
        <tbody>
          <?php foreach ($products as $p): ?>
            <tr>
              <td><?php echo htmlspecialchars($p['id']); ?></td>
              <td><?php echo htmlspecialchars($p['name']); ?></td>
              <td><?php echo htmlspecialchars($p['quantity']); ?></td>
              <td>
                <a class="delete-btn" href="view_products.php?delete_id=<?php echo $p['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php else: ?>
        <p>No products available.</p>
      <?php endif; ?>
      <a href="dashboard.php" class="back-link">← Back to Dashboard</a>
    </div>
  </body>
  </html>
