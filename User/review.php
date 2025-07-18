<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Review System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('pexels-pixabay-258154.jpg'); /* Replace 'background.jpg' with your image path */
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-title {
            text-align: center;
            color: #fff;
            font-size: 3rem;
            font-weight: bold;
            margin-top: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .title-line {
            width: 80%;
            height: 4px;
            background-color: #000000;
            margin: 20px auto 40px;
            border-radius: 2px;
        }

        .container {
            width: 60%;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            animation: fadeInUp 0.5s ease-out;
        }

        h1 {
            text-align: center;
            color:rgba(11, 12, 13, 0.95);
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="submit"] {
            width: 100%;
            background-color:rgb(13, 13, 14);
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color:rgb(11, 14, 17);
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
    <div class="main-title">Hotel Review System</div>
    <div class="title-line"></div>

    <div class="container">
        <h1>Share Your Hotel Experience</h1>
        <form action="To_saveinto_database.php" method="post">
            <!-- User City Name -->
            <div class="mb-3">
                <label for="city">City Name:</label>
                <input class="form-control" type="text" id="city" name="city" placeholder="Enter the city name" required>
            </div>

            <!-- User Hotel Name -->
            <div class="mb-3">
                <label for="hotel">Hotel Name:</label>
                <input class="form-control" type="text" id="hotel" name="hotel" placeholder="Enter the hotel name" required>
            </div>

            <!-- Question 1 -->
            <div class="mb-3">
                <label for="overall_experience">How would you rate your overall experience (1-5 stars)?</label>
                <input class="form-control" type="text" id="overall_experience" name="overall_experience" min="1" max="5" placeholder="Enter a rating" required>
            </div>

            
             <div class="mb-3">
                <label class="form-label">Approximately how much did you spend during your stay ? :</label>
                <select class="form-control" name="budget" required>
                    <option class="placeholder" selected disabled value="">Select Budget</option>
                    <option value="2000">Rs1001 - Rs2000</option>
                    <option value="3000">Rs2001 - Rs3000</option>
                    <option value="4000">Rs3001 - Rs4000</option>
                    <option value="5000">Rs4001 - Rs5000</option>
                </select>
            </div>


            <div class="mb-3">
                <label class="form-label">Type of room : </label>
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

            

            <!-- Question 2 -->
            <div class="mb-3">
                <label for="improvement">Was there anything about your experience that could have been improved?</label>
                <textarea class="form-control" id="improvement" name="improvement" rows="3" placeholder="Write your feedback here" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Submit Review">
            </div>
        </form>
    </div>
</body>

</html>
