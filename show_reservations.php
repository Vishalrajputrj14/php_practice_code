<?php
// DB Connection
$host = "localhost";
$user = "root";
$pass = "2352005";
$db = "hotel_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM reservations ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>All Reservations | Vishal Rajput Hotel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      margin: 0;
      padding: 40px 20px;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #fdfaf5, #f8f3ea);
      color: #3e2f1c;
    }

    h1 {
      text-align: center;
      font-size: 36px;
      margin-bottom: 30px;
      color: #5c3d27;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fffaf5;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    th {
      background: #8b5e3c;
      color: white;
      padding: 14px;
      font-size: 16px;
      text-transform: uppercase;
    }

    td {
      padding: 12px;
      text-align: center;
      font-size: 15px;
      color: #4c3b28;
      border-bottom: 1px solid #e8dccc;
    }

    tr:hover {
      background-color: #f4ede3;
    }

    .btn {
      padding: 8px 16px;
      margin: 4px;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      font-size: 14px;
      display: inline-block;
    }

    .edit {
      background: #3498db;
      color: white;
    }

    .delete {
      background: #e74c3c;
      color: white;
    }

    @media (max-width: 768px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      tr {
        margin-bottom: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        background: white;
      }

      td {
        text-align: left;
        padding: 10px 15px;
        position: relative;
      }

      td::before {
        content: attr(data-label);
        font-weight: bold;
        display: block;
        color: #7b5e46;
        margin-bottom: 5px;
      }

      th {
        display: none;
      }
    }
  </style>
</head>
<body>

<h1>All Hotel Reservations</h1>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Check-In</th>
      <th>Check-Out</th>
      <th>Adults</th>
      <th>Children</th>
      <th>Rooms</th>
      <th>Room Type</th>
      <th>Booked At</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td data-label='ID'>{$row['id']}</td>
                      <td data-label='Name'>{$row['name']}</td>
                      <td data-label='Email'>{$row['email']}</td>
                      <td data-label='Check-In'>{$row['check_in']}</td>
                      <td data-label='Check-Out'>{$row['check_out']}</td>
                      <td data-label='Adults'>{$row['adults']}</td>
                      <td data-label='Children'>{$row['children']}</td>
                      <td data-label='Rooms'>{$row['rooms']}</td>
                      <td data-label='Room Type'>{$row['room_type']}</td>
                      <td data-label='Booked At'>{$row['created_at']}</td>
                      <td data-label='Action'>
                        <a href='edit.php?id={$row['id']}' class='btn edit'>✏️ Edit</a>
                        <a href='delete.php?id={$row['id']}' class='btn delete' onclick=\"return confirm('Are you sure you want to delete this reservation?');\">🗑️ Delete</a>
                      </td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='11'>No bookings found.</td></tr>";
      }
      $conn->close();
    ?>
  </tbody>
</table>

</body>
</html>
