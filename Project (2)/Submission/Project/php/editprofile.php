<?php

// Define database connection variables
$servername = "localhost";
$username = "web";
$password = "web";
$dbname = "example_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Assuming email is stored in session after login, retrieve it from session
session_start();
$email = $_SESSION['email']; // Adjust this line according to your session implementation

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get form data and sanitize it
  $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
  $middlename = mysqli_real_escape_string($conn, $_POST["middlename"]);
  $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $age = mysqli_real_escape_string($conn, $_POST["age"]);
  $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
  
  // Prepare the SQL query to update the data into the database
  $sql_update = "UPDATE users SET firstname='$firstname', middlename='$middlename', lastname='$lastname', username='$username', age='$age', gender='$gender' WHERE email='$email'";
  
  // Execute the update query and check for errors
  if (mysqli_query($conn, $sql_update)) {
    header("Location:profle.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);

?>
