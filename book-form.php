<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Your Room | RoyalStay Hotel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #e0eafc, #cfdef3);
      font-family: 'Segoe UI', sans-serif;
      padding: 40px 0;
    }

    .booking-form {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .booking-form h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
      color: #007bff;
    }

    .form-label {
      font-weight: 500;
    }

    .btn-primary {
      width: 100%;
      padding: 10px;
      font-size: 1.1rem;
      border-radius: 25px;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="booking-form">
    <h2>Fill Your Booking Details</h2>
    <form action="book.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label">Check-in Date</label>
          <input type="date" name="checkin" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Check-out Date</label>
          <input type="date" name="checkout" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label class="form-label">Adults</label>
          <input type="number" name="adults" class="form-control" required>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Children</label>
          <input type="number" name="children" class="form-control" required>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Rooms</label>
          <input type="number" name="rooms" class="form-control" required>
        </div>
      </div>

      <div class="mb-4">
        <label class="form-label">Room Type</label>
        <select name="room_type" class="form-select" required>
          <option value="">Select Room Type</option>
          <option value="1">Deluxe Room</option>
          <option value="2">Family Room</option>
          <option value="3">Daily Room</option>
          <option value="4">Pro Room</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Confirm Booking</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>