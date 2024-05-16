<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Landing Page</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .images-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .images-container img {
            width: 400px;
            height: auto;
            object-fit: contain;
            transition: all 400ms;
            cursor: pointer;
            margin: 0 20px;
        }
        .images-container .image {
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        .images-container .description {
            position: absolute;
            bottom: -60px;
            background: rgba(0,0,0,0.55);
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0 -3px 3px rgba(0, 0, 0, 0.4);
            transition: all 400ms;
        }
        .images-container .image:hover .description {
            opacity: 1;
            bottom: 0;
        }
        .images-container .image:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="images-container">
        <div class="image" onclick="navigateToConfigPage('car_red.png')">
            <img src="car_red.png" alt="Red Car Image">
            <div class="description">
                <h2>Red Car</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="image" onclick="navigateToConfigPage('car_right.png')">
            <img src="car_right.png" alt="Right Facing Car Image">
            <div class="description">
                <h2>Right Facing Car</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>

    <script>
        function navigateToConfigPage(carImage) {
            window.location.href = `configPage.php?car=${carImage}`;
        }
    </script>
</body>
</html>
