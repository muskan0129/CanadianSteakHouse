<?php

// Start session to manage user login state
session_start();

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

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get form data and sanitize it
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  
  // Prepare the SQL query to retrieve the user's data
  $sql = "SELECT * FROM users WHERE email = '$email'";
  
  // Execute the query and get the result
  $result = mysqli_query($conn, $sql);
  
  // Check if the query returned any rows
  if (mysqli_num_rows($result) > 0) {
    
    // Get the user's data from the result
    $row = mysqli_fetch_assoc($result);
    
    // Check if the password is correct
    if (password_verify($password, $row["password"])) {
      // Password is correct, so set session variables to indicate the user is logged in
      $_SESSION["loggedin"] = true;
      $_SESSION["email"] = $email;
      $_SESSION["firstname"] = $row["firstname"]; // Store firstname in session
      
      // Redirect the user to a secure page
      header("location: welcome.php");
    } else {
      // Password is incorrect, so show an error message
      echo "Invalid password";
    }
    
  } else {
    // No rows were returned, so the username is not registered
    echo "Invalid email";
  }
}

// Close the database connection
mysqli_close($conn);

?>
