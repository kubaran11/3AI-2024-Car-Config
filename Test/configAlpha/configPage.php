<?php
// configPage.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Configuration</title>
    <style>
        @font-face {
            font-family: 'Brolimo';
            src: url('brolimo_regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Brolimo', Arial, sans-serif;
            background-color: #141414;
            color: white;
            overflow-x: hidden;
        }

        .header {
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 10px 0;
            display: none;
        }

        .header h1 {
            margin: 10px;
            font-size: 100px;
        }

        .header #carInfo {
            margin: 10px;
            font-size: 24px;
        }

        .car-picker {
            position: relative;
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 50px;
        }

        .car-display {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .car img {
            max-width: 90%;
            max-height: 80%;
            object-fit: contain;
        }

        .controls {
            position: absolute;
            bottom: 150px;
            width: 100%;
            text-align: center;
        }

        .control-button {
            background-color: #444;
            color: white;
            padding: 15px 30px;
            cursor: pointer;
            margin: 5px;
            font-size: 18px;
            border: none;
            font-family: 'Brolimo', Arial, sans-serif;
        }

        .arrow {
            cursor: pointer;
            background-color: #ddd;
            border: none;
            padding: 10px 20px;
            font-size: 24px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .arrow.left {
            left: 400px;
        }

        .arrow.right {
            right: 400px;
        }
    </style>
</head>
<body>
    <div class="header" id="header">
        <h1>ENIGMA</h1>
        <p id="carInfo">Default Car Information</p>
    </div>

    <div class="car-picker">
        <div class="car-display">
            <button class="arrow left" id="arrowleft" onclick="shiftModelLeft()">&lt;</button> <!-- arrow left -->
            <div class="car">
                <img src="auto.png" alt="Car" id="carImage">
            </div>
            <button class="arrow right" id="arrowright" onclick="shiftModelRight()">&gt;</button> <!-- arrow right -->
        </div>
        <div class="controls">
            <button class="control-button" onclick="navigateToConfigPage()">CONFIGURATE</button>
        </div>
    </div>

    <script>
        var cars = [
            { src: 'auto.png', info: 'Hatchback' },
            { src: 'lambo.png', info: 'Sedan' },
            { src: 'slr.png', info: 'Kombi' }
        ];
        
        var modelIndex = 0;
        var modelCategory = 0;

        document.addEventListener("DOMContentLoaded", function() {
            var carImage = document.getElementById('carImage');
            var carInfo = document.getElementById('carInfo');

            var urlParams = new URLSearchParams(window.location.search);
            var selectedCarImage = urlParams.get('car');

            carImage.src = selectedCarImage ? selectedCarImage : cars[modelIndex].src;
            carInfo.textContent = cars[modelIndex].info;
        });

        function updateCarDisplay(index) {
            var carImage = document.getElementById('carImage');
            var carInfo = document.getElementById('carInfo');

            carImage.src = cars[index].src;
            carInfo.textContent = cars[index].info;
        }

        function shiftModelLeft() {
            if (modelIndex <= 0) {
                modelIndex = cars.length - 1;
            } else {
                modelIndex--;
            }
            updateCarDisplay(modelIndex);
        }

        function shiftModelRight() {
            if (modelIndex >= cars.length - 1) {
                modelIndex = 0;
            } else {
                modelIndex++;
            }
            updateCarDisplay(modelIndex);
        }

        function navigateToConfigPage() {
            window.location.href = '../../Test.php';
        }
    </script>
</body>
</html>
