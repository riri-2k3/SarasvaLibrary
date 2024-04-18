<?php
include 'config.php';

// Retrieve data from POST request
$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$serialNumber = $_POST['serial_number'];

// Prepare SQL statement
$sql = "INSERT INTO Book (Title, Author, Genre, SerialNumber) VALUES ('$title', '$author', '$genre', $serialNumber)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
