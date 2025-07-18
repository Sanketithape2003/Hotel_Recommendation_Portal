<?php
// Database connection variables
$servername = "localhost";
$username = "root"; // Change if needed
$password = "";     // Change if you have a DB password
$dbname = "hotel_reviews";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for database connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data from POST
$city = $_POST['city'];
$hotel = $_POST['hotel'];
$overall_experience = $_POST['overall_experience'];
$budget = $_POST['budget'];
$room_type = $_POST['room_type'];
$improvement = $_POST['improvement'];

// Prepare SQL to insert review
$sql = "INSERT INTO reviews (city, hotel, overall_experience, budget, room_type, improvement)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssisss", $city, $hotel, $overall_experience, $budget, $room_type, $improvement);

if ($stmt->execute()) {
    // Redirect to thank you page
    header("Location: Thank_you.php");
    exit(); // Always use exit() after header redirect
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
