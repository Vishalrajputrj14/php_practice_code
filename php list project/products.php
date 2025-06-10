<?php
define('PRODUCTS_FILE', 'products.json');

// अगर file exist करती है, तो products load करो, वरना खाली array
if (file_exists(PRODUCTS_FILE)) {
    $products = json_decode(file_get_contents(PRODUCTS_FILE), true);
} else {
    $products = [
        ['id' => 1, 'name' => 'Pen', 'quantity' => 50],
        ['id' => 2, 'name' => 'Notebook', 'quantity' => 20],
        ['id' => 3, 'name' => 'Pencil', 'quantity' => 100]
    ];
    file_put_contents(PRODUCTS_FILE, json_encode($products));
}
?>
