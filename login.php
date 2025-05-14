<?php
session_start();

//redirecting authenticated user to index.php
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true){
  header("Location: index.php");
  exit();
}

//login credentials
$username = "Ayan";
$password = "ayan123";

//check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $inputUsername = $_POST["username"];
  $inputPassword = $_POST["password"];

  //check if the username and password are correct
  if ($inputUsername === $username && $inputPassword === $password)
  {
    $_SESSION['authenticated'] = true;
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit();
  } else {
    if (!isset($_SESSION['login_attempts'])) {
      $_SESSION['login_attempts'] = 0;
    }
    $_SESSION['login_attempts']++;
    $error_message = "Invalid username or password. Attempt #" . $_SESSION['login_attempts'];
  }
}  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ayan's Secure Login</title>
    <style>
      body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f4f7f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      }
      
      .login-container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        width: 320px
      }
      h2{
        text-align: center;
        color: #2c3e50;
      }
      label{
        display: block;
        margin-top: 15px;
        color: #34495e;
      }
      input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
      }
      button{
        width: 100%;
        padding: 12px;
        background-color: #2980b9;
        color: #ffffff;
        border: none;
        border-radius: 6px;
        margin-top: 20px;
        cursor: pointer;
      }
      button:hover {
        background-color: #3498db;
      }
    </style>
    </head>
  <body>
    <div class="login-container">
    <h2>Welcome to Ayan's Portal</h2>
      <?php if (isset($error_message)): ?>
        <p style="color: red; text-align: center;"><?php echo $error_message; ?></p>
      <?php endif; ?>
    <form method="post" action= "login.php">
      <label>Username:</label><br>
      <input type="text" name="username" required><br><br>
      <label>Password:</label><br>
      <input type="password" name="password" required><br><br>
      <button type="submit"> Login </button>
      </form>
      </div>
    
  </body>
</html>