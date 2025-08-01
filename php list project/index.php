<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'vishal' && $password === 'vishal123') {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMS Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(-45deg, #0f2027, #203a43, #2c5364);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .login-box {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      padding: 40px;
      width: 360px;
      text-align: center;
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.2), 0 0 60px rgba(255, 0, 255, 0.1);
      animation: fadeIn 1.5s ease;
      position: relative;
      z-index: 2;
    }

    .login-box::before {
      content: '';
      position: absolute;
      top: -20px;
      left: -20px;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(255,0,255,0.3), transparent);
      z-index: -1;
      animation: pulse 6s infinite ease-in-out;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 0.6; }
      50% { transform: scale(1.2); opacity: 0.3; }
    }

    .login-box h2 {
      color: #fff;
      margin-bottom: 25px;
      font-size: 2rem;
      text-shadow: 0 0 10px rgba(255,255,255,0.3);
    }

    .login-box input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      background-color: rgba(255, 255, 255, 0.2);
      color: #fff;
      font-size: 1rem;
      box-shadow: inset 0 0 5px rgba(255,255,255,0.1);
      transition: background 0.3s ease;
    }

    .login-box input::placeholder {
      color: #ddd;
    }

    .login-box input:focus {
      outline: none;
      background-color: rgba(255, 255, 255, 0.3);
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(45deg, #ff00cc, #3333ff);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1.1rem;
      cursor: pointer;
      box-shadow: 0 0 15px rgba(255, 0, 255, 0.4);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .login-box button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px rgba(255, 0, 255, 0.6);
    }

    .error {
      color: #ff4d4d;
      background-color: rgba(255, 255, 255, 0.2);
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 15px;
      font-weight: bold;
      box-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>IMS Login</h2>
    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="post">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit" name="login">Login</button>
    </form>
  </div>
</body>
</html>