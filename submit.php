<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];


// Database connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "FCT";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Insert query
$sql = "INSERT INTO users (name, email, website, comment, gender)
        VALUES ('$name', '$email', '$website', '$comment', '$gender')";


// Execute query
if (mysqli_query($conn, $sql)) {

    echo "<h2>New record created successfully!</h2>";

    echo "<h3>Submitted Information:</h3>";

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Website: " . $website . "<br>";
    echo "Comment: " . $comment . "<br>";
    echo "Gender: " . $gender . "<br>";

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_close($conn);

?>