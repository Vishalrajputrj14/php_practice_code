<?php
include "db.php";
if (isset($_POST['task'])) {
    $task = $conn->real_escape_string($_POST['task']);
    $conn->query("INSERT INTO tasks (task, status) VALUES ('$task', 0)");
}
header("Location: index.php");
?>
