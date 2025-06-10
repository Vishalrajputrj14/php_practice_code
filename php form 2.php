<?php 
$name = $email = $gender = $website = $comment = "";
$nameErr = $emailErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = empty($_POST["name"]) ? $nameErr = "Name is required" : text_input($_POST["name"]);
    $email = empty($_POST["email"]) ? $emailErr = "Email is required" : text_input($_POST["email"]);
    $gender = empty($_POST["gender"]) ? $genderErr = "Gender is required" : text_input($_POST["gender"]);
    $website = text_input($_POST["website"]);
    $comment = text_input($_POST["comment"]);
}

function text_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Professional PHP Form</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f0f4f8;
      margin: 0;
      padding: 40px;
      display: flex;
      justify-content: center;
    }

    .container {
      background: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 500px;
    }

    h2 {
      margin-top: 0;
      color: #333;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .error {
      color: red;
      font-size: 13px;
    }

    .gender-options {
      display: flex;
      gap: 10px;
      align-items: center;
    }

    input[type="radio"] {
      margin-right: 4px;
    }

    button {
      background-color: #007bff;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
    }

    button:hover {
      background-color: #0056b3;
    }

    .output {
      margin-top: 25px;
      background: #e9f7ef;
      padding: 15px;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Professional Contact Form</h2>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
      <label>Name *</label>
      <input type="text" name="name" value="<?php echo $name; ?>">
      <span class="error"><?php echo $nameErr; ?></span>
    </div>

    <div class="form-group">
      <label>Email *</label>
      <input type="text" name="email" value="<?php echo $email; ?>">
      <span class="error"><?php echo $emailErr; ?></span>
    </div>

    <div class="form-group">
      <label>Website</label>
      <input type="text" name="website" value="<?php echo $website; ?>">
    </div>

    <div class="form-group">
      <label>Gender *</label>
      <div class="gender-options">
        <label><input type="radio" name="gender" value="female" <?php if ($gender=="female") echo "checked"; ?>>Female</label>
        <label><input type="radio" name="gender" value="male" <?php if ($gender=="male") echo "checked"; ?>>Male</label>
        <label><input type="radio" name="gender" value="other" <?php if ($gender=="other") echo "checked"; ?>>Other</label>
      </div>
      <span class="error"><?php echo $genderErr; ?></span>
    </div>

    <div class="form-group">
      <label>Comment</label>
      <textarea name="comment" rows="4"><?php echo $comment; ?></textarea>
    </div>

    <button type="submit">Submit</button>
  </form>

  <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$genderErr): ?>
    <div class="output">
      <h3>Submitted Data:</h3>
      <strong>Name:</strong> <?php echo $name; ?><br>
      <strong>Email:</strong> <?php echo $email; ?><br>
      <strong>Website:</strong> <?php echo $website; ?><br>
      <strong>Gender:</strong> <?php echo $gender; ?><br>
      <strong>Comment:</strong> <?php echo nl2br($comment); ?><br>
    </div>
  <?php endif; ?>
</div>

</body>
</html>
