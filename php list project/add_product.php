<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

define('PRODUCTS_FILE', 'products.json');

// Load products
$products = file_exists(PRODUCTS_FILE) ? json_decode(file_get_contents(PRODUCTS_FILE), true) : [];

// Add Product
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $quantity = (int)$_POST['quantity'];

    // New ID
    $maxId = 0;
    foreach ($products as $p) {
        if ($p['id'] > $maxId) {
            $maxId = $p['id'];
        }
    }
    $newId = $maxId + 1;

    $products[] = ['id' => $newId, 'name' => $name, 'quantity' => $quantity];

    file_put_contents(PRODUCTS_FILE, json_encode($products));
    header("Location: dashboard.php");
    exit();
}

// Delete Product
if (isset($_POST['delete_id'])) {
    $deleteId = (int)$_POST['delete_id'];

    $products = array_filter($products, function($p) use ($deleteId) {
        return $p['id'] !== $deleteId;
    });

    file_put_contents(PRODUCTS_FILE, json_encode(array_values($products))); // reset index
    header("Location: dashboard.php");
    exit();
}
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add / Delete Product</title>
    <style>
        body {
            background: #f5f5f5;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
        }
        .form-box, .list-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 400px;
            margin-bottom: 30px;
        }
        h2 {
            color: #f655a2;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            padding: 10px 15px;
            background-color: #f655a2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #d9447e;
        }
        .product-item {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product-item:last-child {
            border: none;
        }
    </style>
</head>
<body>

    <div class="form-box">
        <h2>Add Product</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Product Name" required>
            <input type="number" name="quantity" placeholder="Quantity" required>
            <button type="submit" name="add">Add Product</button>
        </form>
          <h2>Delete Product</h2>
        <form method="post">
            <input type="number" name="delete_id" placeholder="Enter Product ID to delete" required>
            <button type="submit">Delete Product</button>
        </form>
    </div>

    <div class="list-box">
        <h2>Product List & delete item😊</h2>
        <?php if (count($products) > 0): ?>
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <div>
                        <strong><?= htmlspecialchars($product['name']) ?></strong> (<?= $product['quantity'] ?>)
                    </div>
                    <form method="post" style="margin: 0;">
                        <input type="hidden" name="delete_id" value="<?= $product['id'] ?>">
                        <button type="submit">Delete</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="text-align:center;">No products available.</p>
        <?php endif; ?> 
    </div>

</body>
</html>
