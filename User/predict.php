<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_reviews";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user inputs from form
$location = $_POST['location'];
$budget = (int)$_POST['budget'];           // Ex: 2000, 3000, 4000
$rating = (int)$_POST['hotel_rating'];     // Ex: 4
$room_type = $_POST['room_type'];          // AC or Non-AC

// Step 1: Get hotels in the given city
$location_pattern = "%" . $location . "%";
$sql = "SELECT * FROM reviews WHERE city LIKE ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $location_pattern);
$stmt->execute();
$result = $stmt->get_result();

$matched_hotels = [];

// Step 2: Filter by budget and rating (below or equal to given rating)
while ($row = $result->fetch_assoc()) {
    $hotel_budget = (int)$row['budget'];               // Already stored as integer
    $hotel_rating = (int)$row['overall_experience'];   // Assuming 1–5 rating

    if ($budget <= $hotel_budget && $rating <= $hotel_rating) {
        $matched_hotels[] = $row;
    }
}


// Step 3: Sort by preferred room type (e.g., AC first)
$preferred = [];
$others = [];

foreach ($matched_hotels as $hotel) {
    if (strtolower($hotel['room_type']) === strtolower($room_type)) {
        $preferred[] = $hotel['id'];
    } else {
        $others[] = $hotel['id'];
    }
}



// Step 4: Merge IDs and redirect
$final_ids = array_merge($preferred, $others);

if (!empty($final_ids)) {
    $id_param = implode(",", $final_ids);
    header("Location: recommended.php?ids=$id_param");
    exit;
} else {
    header("Location: index.php?ids=none");
    exit;
}


?>
