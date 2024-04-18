<?php
include 'config.php';

// Retrieve data from POST request
$name = $_POST['name'];
$enrollmentNumber = $_POST['enrollment_number'];
$email = $_POST['email'];

// Prepare SQL statement
$sql = "INSERT INTO User (Name, EnrollmentNumber, Email) VALUES ('$name', '$enrollmentNumber', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
