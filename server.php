<?php
// Array with names
// get the q parameter from URL
$host = 'localhost';  // replace with your database host
$username = 'wju';  // replace with your database username
$password = '123';  // replace with your database password
$database = 'fingerprints';  // replace with your database name

$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$data = $_GET["data"];

$sql = "INSERT INTO finger_table (data) VALUES ('$data')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

// lookup all hints from array if $q is different from ""

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>