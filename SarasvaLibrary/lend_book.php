<?php
include 'config.php';

// Retrieve data from POST request
$userID = $_POST['user_id'];
$bookID = $_POST['book_id'];

// Prepare SQL statement
$sql = "INSERT INTO Lender (UserID, BookID, Status) VALUES ($userID, $bookID, 'Borrowed')";

if ($conn->query($sql) === TRUE) {
    echo "Book lent successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
