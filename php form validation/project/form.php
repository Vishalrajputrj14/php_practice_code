<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            padding: 20px;
            background: #f4f4f4;
        }
        form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .box {
            flex: 1 1 100%;
        }
        .box p {
            margin: 0 0 5px;
            font-weight: bold;
        }
        .box span {
            color: red;
        }
        .input, select {
            width: 100%;
            padding: 8px;
            margin-top: 3px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background: #0056b3;
        }

        @media (min-width: 600px) {
            .box {
                flex: 1 1 48%;
            }
        }
    </style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $rooms = $_POST['rooms'];
    $type = $_POST['type'];

    echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 20px;'>
            Thank you, <b>$name</b>! We received your booking request.
          </div>";
}
?>

<form method="POST" action="form.php">
    <div class="container">

        <div class="box">
            <p>Name <span>*</span></p>
            <input type="text" name="name" class="input" placeholder="Your Name" required>
        </div>

        <div class="box">
            <p>Email <span>*</span></p>
            <input type="email" name="email" class="input" placeholder="Your Email" required>
        </div>

        <div class="box">
            <p>Check In <span>*</span></p>
            <input type="date" name="checkin" class="input" required>
        </div>

        <div class="box">
            <p>Check Out <span>*</span></p>
            <input type="date" name="checkout" class="input" required>
        </div>

        <div class="box">
            <p>Adults <span>*</span></p>
            <select name="adults" class="input" required>
                <option value="1">1 adult</option>
                <option value="2">2 adults</option>
                <option value="3">3 adults</option>
                <option value="4">4 adults</option>
                <option value="5">5 adults</option>
                <option value="6">6 adults</option>
                <option value="7">7 adults</option>
                <option value="8">8 adults</option>
                <option value="9">9 adults</option>
            </select>
        </div>

        <div class="box">
            <p>Children <span>*</span></p>
            <select name="children" class="input" required>
                <option value="0">0 child</option>
                <option value="1">1 child</option>
                <option value="2">2 children</option>
                <option value="3">3 children</option>
            </select>
        </div>

        <div class="box">
            <p>Rooms <span>*</span></p>
            <select name="rooms" class="input" required>
                <option value="1">1 room</option>
                <option value="2">2 rooms</option>
                <option value="3">3 rooms</option>
            </select>
        </div>

        <div class="box">
            <p>Room Type <span>*</span></p>
            <select name="type" class="input" required>
                <option value="Deluxe">Deluxe Room</option>
                <option value="Family">Family Room</option>
                <option value="Daily">Daily Room</option>
                <option value="Pro">Pro Room</option>
            </select>
        </div>

    </div>

    <input type="submit" value="Check Availability" class="btn">
</form>

</body>
</html>
