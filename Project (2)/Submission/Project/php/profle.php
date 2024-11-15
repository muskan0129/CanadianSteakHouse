<!-- 
  authors:Manik Nagdev(c0901513)
Muskan Muskan(c0906499)
Sukhveer Singh(c0907196)
Mohammad Yameen(c0906420)--><?php

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

// Assuming you have the user's email stored in the session
$user_email = $_SESSION["email"];

// SQL query to fetch user information based on email
$sql = "SELECT * FROM users WHERE email = '$user_email'";

// Execute the query and get the result
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
echo ' connected';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/profile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.css">
</head>
<body>
<div class="header">
            <div class="header_grid">
                <div class="grid-item"><a href="welcome.php">WELCOME</a></div>
                <div class="grid-item" ><a href="../html/menu.html">MENU</a></div>
                <div class="grid-item"><a href="../html/location.html">CONTACT US</a></div>
            </div>
            <div class="header_grid2">
                <div class="grid-item"><a href="../html/thelook.html">ABOUT US</a></div>
                <div class="grid-item" id="current"><a href="profle.php">PROFILE</a></div>
            </div>
        </div>
        <h1 class="site-title">
            <a href="/">Canadian Steak House</a>
        </h1>
        <p class="site-tagline" data-shrink-original-size="52">The West End's Open Grill</p>
        <div class="centertable">
      <div class="client-wrapper"> <!-- Added a wrapper for accordion functionality -->
        <div class="client" data-toggle="tooltip" title="First name of the user">First Name</div>
        <div class="user"><?php 
            echo $row["firstname"];
        ?></div>
      
        <div class="client" data-toggle="tooltip" title="Middle name of the user">Middle Name</div>
        <div class="user"><?php 
          
            echo $row["middlename"];
          
        ?></div>
        <div class="client" data-toggle="tooltip" title="Last name of the user">Last Name</div>
        <div class="user"><?php 
          
            echo $row["lastname"];
          
        ?></div>
        <div class="client" data-toggle="tooltip" title="Username of the user">Username</div>
        <div class="user"><?php 
          
            echo $row["username"];
          
        ?></div>
        <div class="client" data-toggle="tooltip" title="Email address of the user">E-mail</div>
        <div class="user"><?php 
          
            echo $row["email"];
          
        ?></div>
        <div class="client" data-toggle="tooltip" title="Age of the user">Age</div>
        <div class="user"><?php 
          
            echo $row["age"];
          
        ?></div>
        <div class="client" data-toggle="tooltip" title="Gender of the user">Gender</div>
        <div class="user"><?php 
          
            echo $row["gender"];
          
        ?></div>
      </div>
</div>
<div class="edit"><a href="../html/editprofile.html">EDIT</a></div>

<!-- JavaScript and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.js"></script>
<script>
  $(document).ready(function(){
    // Smooth scrolling
    $('a[href^="#"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });

    // Accordion functionality
    $('.client-wrapper').click(function(){
      $(this).find('.user').slideToggle();
    });

    // Animate CSS
    $('.user').addClass('animate__animated animate__fadeInUp');

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Color Picker
    $('#colorPicker').spectrum({
      color: "#000", // Default color
      showInput: true,
      showPalette: true,
      showSelectionPalette: true,
      palette: [
          ['#000', '#444', '#666', '#999', '#ccc', '#eee', '#f3f3f3', '#fff'],
          ['#f00', '#f90', '#ff0', '#0f0', '#0ff', '#00f', '#90f', '#f0f'],
          ['#f4cccc', '#fce5cd', '#fff2cc', '#d9ead3', '#d0e0e3', '#cfe2f3', '#d9d2e9', '#ead1dc'],
          ['#ea9999', '#f9cb9c', '#ffe599', '#b6d7a8', '#a2c4c9', '#9fc5e8', '#b4a7d6', '#d5a6bd'],
          ['#e06666', '#f6b26b', '#ffd966', '#93c47d', '#76a5af', '#6fa8dc', '#8e7cc3', '#c27ba0'],
          ['#c00', '#e69138', '#f1c232', '#6aa84f', '#45818e', '#3d85c6', '#674ea7', '#a64d79'],
          ['#900', '#b45f06', '#bf9000', '#38761d', '#134f5c', '#0b5394', '#351c75', '#741b47'],
          ['#600', '#783f04', '#7f6000', '#274e13', '#0c343d', '#073763', '#20124d', '#4c1130']
      ]
  });
  });
</script>
</body>
</html>
<?php
// Close the database connection
mysqli_close($conn);
?>
