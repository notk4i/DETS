<?php
$loginMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    // Dummy login (replace this with real database logic)
    if ($username === "admin" && $password === "1234") {
        $loginMessage = "Login successful!";
    } else {
        $loginMessage = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
    }

    .background {
      background: url('cu.jpg') no-repeat center center/cover;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background: rgba(255, 255, 255, 0.1);
      padding: 30px 40px;
      border-radius: 15px;
      backdrop-filter: blur(8px);
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      color: white;
      width: 300px;
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 20px;
    }

    .input-box {
      position: relative;
      margin-bottom: 20px;
    }

    .input-box input {
      width: 100%;
      padding: 10px;
      background: transparent;
      border: none;
      border-bottom: 1px solid white;
      color: white;
    }

    .input-box label {
      position: absolute;
      top: 10px;
      left: 0;
      pointer-events: none;
      transition: 0.3s ease;
      color: white;
    }

    .input-box input:focus + label,
    .input-box input:valid + label {
      top: -15px;
      font-size: 12px;
      color: #ccc;
    }

    .options {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      margin-bottom: 20px;
    }

    .options a {
      color: white;
      text-decoration: none;
    }

    .login-btn {
      width: 100%;
      padding: 10px;
      background: #fff;
      border: none;
      border-radius: 25px;
      color: #333;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
    }

    .login-btn:hover {
      background: #eee;
    }

    .register-link {
      margin-top: 15px;
      font-size: 12px;
    }

    .register-link a {
      color: white;
      text-decoration: underline;
    }

    .message {
      margin-bottom: 15px;
      font-size: 14px;
      color: yellow;
    }
  </style>
</head>
<body>
  <div class="background">
    <div class="login-box">
      <h2>Login</h2>
      <?php if ($loginMessage): ?>
        <div class="message"><?= htmlspecialchars($loginMessage) ?></div>
      <?php endif; ?>
      <form method="POST" action="login.php">
        <div class="input-box">
          <input type="text" name="username" required>
          <label>Username</label>
        </div>
        <div class="input-box">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <div class="options">
          <label><input type="checkbox"> Remember me</label>
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="login-btn">Login</button>
        <p class="register-link">Don't have an account? <a href="#">Register</a></p>
      </form>
    </div>
  </div>
</body>
</html>