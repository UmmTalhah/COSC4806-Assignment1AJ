<?php
session_start();

//checking if the user is logged in
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {header("Location: login.php");
exit();
}
//get username
$username =isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';

//formatting date
date_default_timezone_set('America/Edmonton');
$date = date('l, F j, Y - g:i A');
?>

<html>
  <head>
    <title>Welcome All!</title>
    <style>
      body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #eaf2f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      }
      .welcome-box {
        background-color: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
      }
      h1 {
        color: #2c3e50;
      }
      p {
        color: #555;
      }
      a {
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        color: #ffffff;
        background-color: #2980b9;
        padding: 10px 20px;
        border-radius: 6px;
      }
      a:hover {
        background-color: #3498db;
      }
      </style>
  </head>
  <body>

    <div class="welcome-box">
      <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
      <p>Today's date is <?php
  $username = $_SESSION ['username'];
        htmlspecialchars($username); ?>!</h1>
      <p>Today's date is <?php echo $date; ?></p>
      <a href="logout.php">Logout</a>
      </div>
    
    </body>
    </html>