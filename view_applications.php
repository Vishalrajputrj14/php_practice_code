<?php
// Database config
$host = "localhost";
$user = "root";
$pass = "2352005";
$db = "bank_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM account_applications ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Applications</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 30px;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #f2f2f2;
        }
        img {
            max-height: 50px;
        }
        body {
            font-family: Arial;
            padding: 20px;
        }
    </style>
</head>
<body>

<h2>Submitted Bank Applications</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Aadhaar</th>
        <th>PAN</th>
        <th>Account Type</th>
        <th>Deposit</th>
        <th>Signature</th>
        <th>Submitted At</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>{$row['dob']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>" . nl2br(htmlspecialchars($row['address'])) . "</td>
                <td>{$row['aadhaar']}</td>
                <td>{$row['pan']}</td>
                <td>{$row['account_type']}</td>
                <td>₹" . number_format($row['deposit'], 2) . "</td>
                <td><img src='{$row['signature']}' alt='Signature'></td>
                <td>{$row['submitted_at']}</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='13'>No applications found.</td></tr>";
    }

    $conn->close();
    ?>

</table>

</body>
</html>
