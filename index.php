<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php 
$debugRetazec = "";
if (isset($_POST["submit"])) {
    if ($_POST["email"] == null ||
        $_POST["username"] == null ||
        $_POST["password"] == null || 
        $_POST["gender"] == null) 
    {
        echo "Nedostatok udajov";
        print_r($_POST);
    }
    else 
    {
      $email = $_POST["email"];
      $username = $_POST["username"];
      $password = $_POST["password"];
      $gender = $_POST["gender"];
      $role = isset($_POST["role"]) ? ($_POST["role"] ): null;
      $debugRetazec = "tvoje meno je " . $username;
    }
  }
?>

<div class="container">
  <div class="form-container">
    <h2>Register Form</h2>
    <form method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">

      <label for="username">Username:</label>
      <input type="text" id="username" name="username">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password">

      <label for="gender">Gender:</label>
      <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <div>
        <label class="radio"><input type="radio" name="role" value="student"> Student</label>
        <label class="radio"><input type="radio" name="role" value="teacher"> Teacher</label>
        <label class="radio"><input type="radio" name="role" value="developer"> Developer</label>
      </div>


      <button type="submit">Register</button>
    </form>
  </div>

  <div class="image-container">
    <img src="image.jpeg" alt="Image">
  </div>
  <h2>For Debug:<?php echo $debugRetazec?> </h2>
</div>
