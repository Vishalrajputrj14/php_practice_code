<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Task Manager</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Enter new task" required>
            <button type="submit">Add Task</button>
        </form>

        <ul class="task-list">
            <?php
            $sql = "SELECT * FROM tasks ORDER BY id DESC";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<li class='" . ($row['status'] == 1 ? "done" : "") . "'>";
                echo htmlspecialchars($row['task']);
                echo "<a href='update_task.php?id={$row['id']}'>✔️</a>";
                echo "<a href='delete_task.php?id={$row['id']}'>🗑️</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
