<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Configuration</title>
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="js/projekt.js">
<link rel="icon" href="images/SPECTRAWEB.png">

</head>
<body>
<div class="container">
    <div class="header">
        <h1>Enigma</h1>
        <h2 id="carType">Combi</h2>
    </div>
    <div class="car-display">
        <button class="arrow left">&lt;</button>
        <div class="car">
            <img src="images/auto.png" alt="Car" id="carImage">
        </div>
        <button class="arrow right">&gt;</button>
    </div>
    <div class="controls">
        <button class="control-button" onclick="configureCar()">CONFIGURATE</button>
    </div>
    <div id="configView">
        <img src="images/auto.png" alt="Configured Car">
    </div>
</div>
<script src="js/projekt.js"></script>
</body>
</html>