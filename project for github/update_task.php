<?php
include "db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("UPDATE tasks SET status = 1 WHERE id = $id");
}
header("Location: index.php");
?>
