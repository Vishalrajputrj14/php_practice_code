<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

define('FEATURE_FILE', 'features.json');

// Load existing features
$features = file_exists(FEATURE_FILE) ? json_decode(file_get_contents(FEATURE_FILE), true) : [];

// Delete feature
if (isset($_GET['delete_id'])) {
    $deleteId = intval($_GET['delete_id']);
    $features = array_filter($features, function($f) use ($deleteId) {
        return $f['id'] !== $deleteId;
    });
    // Re-index array
    $features = array_values($features);
    file_put_contents(FEATURE_FILE, json_encode($features, JSON_PRETTY_PRINT));
    header("Location: add_feature.php?deleted=1");
    exit();
}

// Add feature
if (isset($_POST['add_feature'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $description = htmlspecialchars(trim($_POST['description']));
    $newId = count($features) > 0 ? max(array_column($features, 'id')) + 1 : 1;
    $features[] = [
        'id' => $newId,
        'name' => $name,
        'description' => $description
    ];
    file_put_contents(FEATURE_FILE, json_encode($features, JSON_PRETTY_PRINT));
    header("Location: add_feature.php?success=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Feature</title>
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
        input, textarea {
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
        .feature-list {
            margin-top: 30px;
        }
        .feature-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .feature-item:last-child {
            border: none;
        }
        .feature-title {
            font-weight: bold;
            color: #444;
        }
        .feature-desc {
            color: #666;
            margin-top: 5px;
            flex-grow: 1;
            margin-left: 20px;
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
    <h2>+ Add New Feature</h2>

    <?php if (isset($_GET['success'])): ?>
        <div class="success">✅ Feature added successfully!</div>
    <?php endif; ?>

    <?php if (isset($_GET['deleted'])): ?>
        <div class="deleted">🗑️ Feature deleted successfully!</div>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="name" placeholder="Feature Name" required>
        <textarea name="description" placeholder="Feature Description" rows="4" required></textarea>
        <button type="submit" name="add_feature">Add Feature</button>
    </form>

    <div class="back">
        <a href="dashboard.php">← Back to Dashboard</a>
    </div>

    <?php if (count($features) > 0): ?>
        <div class="feature-list">
            <h3 style="color:#f655a2;">📋 Feature List</h3>
            <?php foreach ($features as $f): ?>
                <div class="feature-item">
                    <div>
                        <div class="feature-title"><?= htmlspecialchars($f['name']) ?></div>
                        <div class="feature-desc"><?= htmlspecialchars($f['description']) ?></div>
                    </div>
                    <form method="get" onsubmit="return confirm('Are you sure you want to delete this feature?');">
                        <input type="hidden" name="delete_id" value="<?= $f['id'] ?>">
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No features found.</p>
    <?php endif; ?>
</div>

</body>
</html>
