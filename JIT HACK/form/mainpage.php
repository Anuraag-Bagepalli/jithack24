<?php

// Database connection details
$servername = "localhost";
$username = "'root'";
$password = "   ";
$dbname = "ott_subscriptions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Action handler
if (isset($_GET["action"]) && $_GET["action"] == "update") {
  $platform = $_POST["platform"];
  $startDate = $_POST["start_date"];
  $endDate = $_POST["end_date"];

  // Update subscription in the database (replace with your actual logic)
  $sql = "UPDATE subscriptions SET start_date='$startDate', end_date='$endDate' WHERE platform='$platform'";

  if ($conn->query($sql) === TRUE) {
    echo "Subscription updated successfully";
  } else {
    echo "Error updating subscription: " . $conn->error;
  }
  exit();
}

$conn->close();
