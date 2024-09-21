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

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get form data and sanitize it
  $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
  $middlename = mysqli_real_escape_string($conn, $_POST["middlename"]);
  $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $age = mysqli_real_escape_string($conn, $_POST["age"]);
  $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);

  
  // Hash the password using bcrypt
  $hashed_password = password_hash($password, PASSWORD_BCRYPT);
  
  // Prepare the SQL query to insert the data into the database
  $sql = "INSERT INTO users (firstname, middlename, lastname, username, password, email, age, gender)
          VALUES ('$firstname', '$middlename', '$lastname', '$username', '$hashed_password', '$email', '$age', '$gender')";
  
  // Execute the query and check for errors
  if (mysqli_query($conn, $sql)) {
    
    header("location: welcome.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);

?>
