<?php
$conn = new mysqli("localhost", "root", "2352005", "student");

// Step 1: Check if ID is present in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: ID is missing in the URL.");
}

// Step 2: Sanitize the ID
$id = intval($_GET['id']); // convert to integer

// Step 3: Run the query safely
$result = $conn->query("SELECT * FROM student WHERE ID = $id");

if (!$result || $result->num_rows === 0) {
    die("Error: Student not found.");
}

$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Edit Student</title>
</head>
<body>
  <h2>Edit Student</h2>
  <form action="update_student.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['ID'] ?>">

    First Name: <input type="text" name="firstname" value="<?= $row['FIRSTNAME'] ?>"><br><br>
    Last Name: <input type="text" name="lastname" value="<?= $row['LASTNAME'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $row['EmailID'] ?>"><br><br>
    Phone: <input type="text" name="phone" value="<?= $row['PHONENO'] ?>"><br><br>
    Gender: <input type="text" name="gender" value="<?= $row['gender'] ?>"><br><br>
    
    <!-- Add rest of fields similarly -->

    <button type="submit">Update</button>
  </form>
</body>
</html>
