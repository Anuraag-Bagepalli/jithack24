<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .greeting {
            font-size: 2.5em;
            font-weight: bold;
            color: #333;
        }
        .buttons {
            margin-top: 20px;
        }
        .buttons a {
            display: inline-block;
            margin: 10px 20px;
            padding: 10px 20px;
            font-size: 1.2em;
            color: #fff;
            background: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s, transform 0.3s;
        }
        .buttons a:hover {
            background: #0056b3;
            transform: scale(1.05);
        }
        .buttons a:active {
            background: #004080;
            transform: scale(1.00);
        }
    </style>

</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <div class="buttons">
            <a href="mainpage.html">Manage Your Subscriptions</a>
            <a href="logout.php">Logout</a>
        </div>
      
      
    </div>
</body>
</html>