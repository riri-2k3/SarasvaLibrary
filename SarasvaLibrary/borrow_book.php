<?php
include 'config.php';

// Retrieve data from POST request
$userID = $_POST['user_id'];
$bookID = $_POST['book_id'];

// Prepare SQL statement
$sql = "INSERT INTO Borrower (UserID, BookID, Status) VALUES ($userID, $bookID, 'Borrowed')";

if ($conn->query($sql) === TRUE) {
    echo "Book borrowed successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
