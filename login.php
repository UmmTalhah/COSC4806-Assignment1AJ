<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ayan's Secure Login</title>
    <style>
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f4f7f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      }
      .login container {
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
    <div class="login container">
    <h2>Welcome to Ayan's Portal</h2>
    <form method="post" action= "login.php">
      <label>Username:</label><br>
      <input type="text" name="username"> required><br><br>
      <label>Password:</label><br>
      <input type="password" name="password" required><br><br>
      <button type="submit"> Login </button>
      </form>
      </div>
    
  </body>
</html>