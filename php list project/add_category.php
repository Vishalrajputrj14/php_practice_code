<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

define('CATEGORY_FILE', 'categories.json');

// Load existing categories
$categories = file_exists(CATEGORY_FILE) ? json_decode(file_get_contents(CATEGORY_FILE), true) : [];

// Delete category
if (isset($_GET['delete_id'])) {
    $deleteId = intval($_GET['delete_id']);
    // Filter out the category to delete
    $categories = array_filter($categories, function($c) use ($deleteId) {
        return $c['id'] !== $deleteId;
    });
    // Re-index array (optional but cleaner)
    $categories = array_values($categories);

    // Save updated list
    file_put_contents(CATEGORY_FILE, json_encode($categories, JSON_PRETTY_PRINT));
    header("Location: add_category.php?deleted=1");
    exit();
}

// Add category
if (isset($_POST['add_category'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $newId = count($categories) > 0 ? max(array_column($categories, 'id')) + 1 : 1;
    $categories[] = [
        'id' => $newId,
        'name' => $name
    ];
    file_put_contents(CATEGORY_FILE, json_encode($categories, JSON_PRETTY_PRINT));
    header("Location: add_category.php?success=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        h2 {
            color: #f655a2;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background: #f655a2;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #d9447e;
        }
        .back {
            margin-top: 20px;
            text-align: center;
        }
        .back a {
            color: #f655a2;
            text-decoration: none;
        }
        .back a:hover {
            text-decoration: underline;
        }
        .success, .deleted {
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .success {
            color: green;
        }
        .deleted {
            color: red;
        }
        .category-list {
            margin-top: 30px;
        }
        .category-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .category-item:last-child {
            border: none;
        }
        .category-title {
            font-weight: bold;
            color: #444;
        }
        .delete-btn {
            background: #ff4c4c;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }
        .delete-btn:hover {
            background: #cc0000;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>+ Add New Category</h2>

    <?php if (isset($_GET['success'])): ?>
        <div class="success">✅ Category added successfully!</div>
    <?php endif; ?>

    <?php if (isset($_GET['deleted'])): ?>
        <div class="deleted">🗑️ Category deleted successfully!</div>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="name" placeholder="Category Name" required>
        <button type="submit" name="add_category">Add Category</button>
    </form>

    <div class="back">
        <a href="dashboard.php">← Back to Dashboard</a>
    </div>

    <?php if (count($categories) > 0): ?>
        <div class="category-list">
            <h3 style="color:#f655a2;">📋 Category List</h3>
            <?php foreach ($categories as $c): ?>
                <div class="category-item">
                    <div class="category-title"><?= htmlspecialchars($c['name']) ?></div>
                    <form method="get" onsubmit="return confirm('Are you sure you want to delete this category?');">
                        <input type="hidden" name="delete_id" value="<?= $c['id'] ?>">
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No categories found.</p>
    <?php endif; ?>
</div>

</body>
</html>
