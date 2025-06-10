<?php 
$name = $email = $phone = $dob = $gender = $address = $city = $state = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function text_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = text_input($_POST["name"]);
    $email = text_input($_POST["email"]);
    $phone = text_input($_POST["phone"]);
    $dob = text_input($_POST["dob"]);
    $gender = text_input($_POST["gender"] ?? "");
    $address = text_input($_POST["address"]);
    $city = text_input($_POST["city"]);
    $state = text_input($_POST["state"]);

    if (empty($name)) $errors[] = "Name is required.";
    if (empty($email)) $errors[] = "Email is required.";
    if (empty($phone)) $errors[] = "Phone is required.";
    if (empty($gender)) $errors[] = "Gender is required.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>4-Column Grid Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f7f9;
      padding: 30px;
    }

    .form-container {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      max-width: 1000px;
      margin: auto;
    }

    h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .grid-form {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 20px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: 600;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    select,
    textarea {
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    .full-width {
      grid-column: span 4;
    }

    button {
      grid-column: span 4;
      padding: 12px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    .error {
      background: #ffe5e5;
      padding: 10px;
      color: red;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .output {
      margin-top: 30px;
      padding: 20px;
      background: #e6f9ec;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>4-Column Grid Form</h2>

  <?php if (!empty($errors)): ?>
    <div class="error">
      <?php foreach ($errors as $e) echo "<div>• $e</div>"; ?>
    </div>
  <?php endif; ?>

  <form method="POST" action="">
    <div class="grid-form">
      <div class="form-group">
        <label>Name *</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
      </div>

      <div class="form-group">
        <label>Email *</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
      </div>

      <div class="form-group">
        <label>Phone *</label>
        <input type="text" name="phone" value="<?php echo $phone; ?>">
      </div>

      <div class="form-group">
        <label>Date of Birth</label>
        <input type="date" name="dob" value="<?php echo $dob; ?>">
      </div>

      <div class="form-group">
        <label>Gender *</label>
        <select name="gender">
          <option value="">Select</option>
          <option value="Male" <?php if ($gender=="Male") echo "selected"; ?>>Male</option>
          <option value="Female" <?php if ($gender=="Female") echo "selected"; ?>>Female</option>
          <option value="Other" <?php if ($gender=="Other") echo "selected"; ?>>Other</option>
        </select>
      </div>

      <div class="form-group">
        <label>City</label>
        <input type="text" name="city" value="<?php echo $city; ?>">
      </div>

      <div class="form-group">
        <label>State</label>
        <input type="text" name="state" value="<?php echo $state; ?>">
      </div>

      <div class="form-group full-width">
        <label>Address</label>
        <textarea name="address" rows="3"><?php echo $address; ?></textarea>
      </div>

      <button type="submit">Submit Form</button>
    </div>
  </form>

  <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors)): ?>
    <div class="output">
      <h3>Form Data Submitted:</h3>
      <strong>Name:</strong> <?php echo $name; ?><br>
      <strong>Email:</strong> <?php echo $email; ?><br>
      <strong>Phone:</strong> <?php echo $phone; ?><br>
      <strong>Date of Birth:</strong> <?php echo $dob; ?><br>
      <strong>Gender:</strong> <?php echo $gender; ?><br>
      <strong>City:</strong> <?php echo $city; ?><br>
      <strong>State:</strong> <?php echo $state; ?><br>
      <strong>Address:</strong> <?php echo nl2br($address); ?><br>
    </div>
  <?php endif; ?>
</div>

</body>
</html>
