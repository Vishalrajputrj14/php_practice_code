<?php
// DB Connection
$conn = new mysqli("localhost", "root", "2352005", "student");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Count total students
$total_result = $conn->query("SELECT COUNT(*) as total FROM student");
$total_data = $total_result->fetch_assoc();
$total_students = $total_data['total'];

// Get all students
$students = $conn->query("SELECT * FROM student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-4">
    <h2 class="text-center mb-4">🎓 Student Dashboard</h2>

    <div class="card mb-4">
        <div class="card-body d-flex justify-content-between">
            <h5>Total Students: <span class="badge bg-primary"><?= $total_students ?></span></h5>
           <a href="student_form.html" class="btn btn-success">+ Add New Student</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>State</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php while($row = $students->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['ID'] ?></td>
                    <td><?= $row['FIRSTNAME'] ?></td>
                    <td><?= $row['LASTNAME'] ?></td>
                    <td><?= $row['EmailID'] ?></td>
                    <td><?= $row['PHONENO'] ?></td>
                    <td><?= $row['SUBJECT'] ?></td>
                    <td><?= $row['STATE'] ?></td>
                    <td><?= $row['gender'] ?? 'N/A' ?></td>
                    <td>
                        <a href="edit_student.php?id=<?= $row['ID'] ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="delete_student.php?id=<?= $row['ID'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>