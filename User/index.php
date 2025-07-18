<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Services Platform</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('pexels-pixabay-258154.jpg'); /* Replace with your image path */
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
            text-shadow: 2px 2px 5px rgba(9, 13, 233, 0.87);
        }

        

        .title-line {
            width: 80%;
            height: 4px;
            background-color: #008000;
            margin: 20px auto 40px;
            border-radius: 2px;
        }

        .container-wrapper {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 0 auto;
            padding: 20px;
            max-width: 1200px;
        }

        .container {
            width: 45%;
            background-color: rgba(243, 237, 237, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(45, 249, 19, 0.2);
            animation: fadeInUp 0.5s ease-out;
        }

        h1 {
            text-align: center;
            color: #007bff;
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
            background-color: rgb(21, 212, 21);
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
    <div class="main-title">Welcome to Our Hotel Services Platform</div>
    <div class="title-line"></div>

    <div class="container-wrapper">
        <!-- Hotel Recommendation Form -->
        <div class="container">
            <h1>Hotel Recommendation</h1>
            <form action="hotel_recommendation.php" method="post">
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Get Recommendations">
                </div>
            </form>
        </div>

        <!-- Hotel Review Form -->
        <div class="container">
            <h1>Hotel Review</h1>
            <form action="review.php" method="post">
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Submit Review">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
