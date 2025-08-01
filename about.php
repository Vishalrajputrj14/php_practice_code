<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us | RoyalStay Hotel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #e0eafc, #cfdef3);
      margin: 0;
      padding: 0;
    }

    /* ✅ 3D Glass Navbar */
    .navbar {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.7);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      border-radius: 0 0 15px 15px;
    }

    .navbar-brand img {
      transition: transform 0.3s ease;
    }

    .navbar-brand img:hover {
      transform: scale(1.1);
    }

    .nav-link {
      font-weight: 500;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    .nav-link:hover {
      color: #007BFF;
      transform: translateY(-2px);
    }

    .btn-success {
      box-shadow: 0 4px 10px rgba(0, 128, 0, 0.3);
      transition: transform 0.3s ease;
    }

    .btn-success:hover {
      transform: scale(1.05);
    }

    /* ✅ Hero Section */
    .about-section {
      background: url('images/hotel-bg.jpg') no-repeat center center/cover;
      padding: 100px 20px;
      color: white;
      text-align: center;
      box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.4);
    }

    .about-section h1 {
      font-size: 3rem;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
    }

    .about-content {
      padding: 60px 20px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      margin-top: -50px;
      backdrop-filter: blur(8px);
    }

    .about-content h2 {
      font-weight: bold;
      color: #333;
    }

    .about-content ul {
      list-style: none;
      padding-left: 0;
    }

    .about-content li {
      margin-bottom: 10px;
      font-size: 1.1rem;
      padding-left: 1.5em;
      position: relative;
    }

    .about-content li::before {
      content: '✔️';
      position: absolute;
      left: 0;
      color: #28a745;
    }

    /* ✅ Footer */
    footer {
      background: #222;
      color: #fff;
      padding: 20px;
      font-size: 0.9rem;
      box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>
<body>

<!-- ✅ Navbar -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="rajput.png" alt="RoyalStay Logo" style="width: 100px; height: auto;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="hotal.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rooms.html">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success ms-3" href="#">Book Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- ✅ Hero Section -->
<section class="about-section">
  <div class="container">
    <h1>About RoyalStay</h1>
    <p>Experience luxury, comfort & hospitality like never before.</p>
  </div>
</section>

<!-- ✅ About Content -->
<section class="about-content container">
  <h2 class="mb-4">Welcome to RoyalStay Hotel</h2>
  <p>At RoyalStay, we believe in providing a home away from home. Located in the heart of the city, our hotel offers premium comfort, top-class facilities, and impeccable service to make your stay memorable.</p>
  <p>Whether you're a business traveler, a family on vacation, or a couple seeking a romantic getaway, RoyalStay is the perfect destination. Our rooms are designed with elegance and functionality, offering both style and serenity.</p>
  <h4 class="mt-5">Why Choose Us?</h4>
  <ul>
    <li>🏨 Luxurious & Spacious Rooms</li>
    <li>🥗 24x7 Multi-cuisine Restaurant</li>
    <li>🏊‍♂️ Swimming Pool, Spa & Gym</li>
    <li>🚗 Free Parking & Airport Pickup</li>
    <li>🧼 Daily Housekeeping</li>
    <li>🌐 High-Speed WiFi</li>
  </ul>
</section>

<!-- ✅ Footer -->
<footer class="text-center">
  © <?= date("Y") ?> RoyalStay Hotel. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>