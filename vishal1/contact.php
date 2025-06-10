<?php
// --- PHP भाग ---

// Database config (अपना DB credentials यहाँ डालें)
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "test_db";  // अपना DB नाम यहाँ डालें

// Create DB connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $msg = trim($_POST["message"]);

    // Server-side validation
    if (!$name || !$email || !$msg) {
        $error = "Please fill all fields!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email!";
    } else {
        // Prepare and bind to avoid SQL Injection
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $msg);

        if ($stmt->execute()) {
            // Send Email notification (optional)
            $to = "your-email@example.com"; // यहाँ अपना ईमेल डालें
            $subject = "New Contact Message from $name";
            $body = "Name: $name\nEmail: $email\nMessage:\n$msg";
            $headers = "From: no-reply@example.com";

            mail($to, $subject, $body, $headers);

            $message = "Thank you, $name! Your message has been sent.";
        } else {
            $error = "Failed to save data.";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Us</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f685a2, #f655a2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .contact-form {
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            width: 400px;
            text-align: center;
        }
        .contact-form h2 {
            margin-bottom: 20px;
            color: #f655a2;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 12px 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
            resize: none;
            box-sizing: border-box;
        }
        .contact-form button {
            background: #f655a2;
            color: white;
            border: none;
            padding: 14px;
            font-size: 18px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            transition: background 0.3s ease;
        }
        .contact-form button:hover {
            background: #d9447e;
        }
        .message {
            margin-top: 15px;
            font-weight: bold;
            color: green;
        }
        .error {
            margin-top: 15px;
            font-weight: bold;
            color: red;
        }
    </style>
    <script>
        // Simple JS validation
        function validateForm() {
            let name = document.forms["contactForm"]["name"].value.trim();
            let email = document.forms["contactForm"]["email"].value.trim();
            let message = document.forms["contactForm"]["message"].value.trim();
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (name === "" || email === "" || message === "") {
                alert("Please fill all fields.");
                return false;
            }
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="contact-form">
        <h2>Contact Us</h2>
        <?php if ($message) { ?>
            <p class="message"><?php echo $message;echo "Message sent (simulation)";
 ?></p>
        <?php } ?>
        <?php if ($error) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>
        <form name="contactForm" method="post" action="" onsubmit="return validateForm()">
            <input type="text" name="name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Your Email" required />
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</body>
</html>
