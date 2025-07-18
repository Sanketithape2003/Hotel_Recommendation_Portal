<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Recommendation Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('pexels-tomfisk-2297482.jpg'); /* Replace 'background.jpg' with your image path */
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            animation: fadeInUp 0.5s ease-out;
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hotel Recommendation Portal</h1>

        <form action="predict.php" method="post">
            <div class="mb-3">
                <label class="form-label">Where are you planning to stay?</label>
                <input class="form-control" type="text" name="location" placeholder="Enter city or area" required />
            </div>

            <div class="mb-3">
                <label class="form-label">What’s your budget for the stay?</label>
                <select class="form-control" name="budget" required>
                    <option class="placeholder" selected disabled value="">Select Budget</option>
                    <option value="2000">Rs1001 - Rs2000</option>
                    <option value="3000">Rs2001 - Rs3000</option>
                    <option value="4000">Rs3001 - Rs4000</option>
                    <option value="5000">Rs4001 - Rs5000</option>
                </select>
            </div>

            <div class="mb-3">
    <label class="form-label">What is your expected hotel rating?</label>
    <select class="form-control" name="hotel_rating" required>
        <option value="" disabled selected>Select rating</option>
        <option value="5">5 Stars</option>
        <option value="4">4 Stars</option>
        <option value="3">3 Stars</option>
        <option value="2">2 Stars</option>
        <option value="1">1 Star</option>
    </select>
    <small class="form-text text-muted">Choose the star rating you'd like for your hotel.</small>
</div>

             <div class="mb-3">
                <label class="form-label">Type of room</label>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="room_type" value="AC Room" id="roomAC">
                        <label class="form-check-label" for="roomAC">AC Room</label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="room_type" value="Non-AC Room" id="roomNonAC">
                        <label class="form-check-label" for="roomNonAC">Non-AC Room</label>
                </div>
                <small class="form-text text-muted">Select only one option.</small>
            </div>

            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Find Hotels">
            </div>
        </form>
    </div>
</body>

</html>
