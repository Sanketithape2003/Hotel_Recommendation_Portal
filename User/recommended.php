<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recommended Hotels</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('pexels-jarod-16691477.jpg');
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container-wrapper {
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        .container {
            width: 80%;
            background-color: rgba(255,255,255,0.95);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        .hotel-card {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: #f5f5f5;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-primary {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container-wrapper">
    <div class="container">
        <h2>Recommended Hotels</h2>

        <?php
        if (isset($_GET['ids']) && $_GET['ids'] !== "none") {
            $ids = explode(",", $_GET['ids']);
            $ids = array_map('intval', $ids); // Sanitize

            // Debug print
            // echo "<pre>IDs: "; print_r($ids); echo "</pre>";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hotel_reviews";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $id_list = implode(",", $ids);
            $sql = "SELECT * FROM reviews WHERE id IN ($id_list)";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='hotel-card'>";
                    echo "<h4>" . htmlspecialchars($row['hotel']) . "</h4>";
                    echo "<p><strong>City:</strong> " . htmlspecialchars($row['city']) . "</p>";
                    echo "<p><strong>Budget:</strong> Rs " . htmlspecialchars($row['budget']) . "</p>";
                    echo "<p><strong>Room Type:</strong> " . htmlspecialchars($row['room_type']) . "</p>";
                    echo "<p><strong>Overall Experience:</strong> " . htmlspecialchars($row['overall_experience']) . " / 5</p>";
                    echo "</div>";
                }
            } else {
                echo "<div class='alert alert-warning'>No hotels matched your criteria.</div>";
            }

            $conn->close();
        } else {
            echo "<div class='alert alert-warning'>No suitable hotels found. Please adjust your search criteria.</div>";
        }
        ?>

        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
</div>
</body>
</html>
