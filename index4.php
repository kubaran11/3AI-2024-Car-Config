<?php
require "db/generateButtons.php";
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/SPECTRAWEB.png">


<link href="css/style2.css" rel="stylesheet">
    <link href="js/projekt.js" rel="movesheet">
    </head>
    <body>

<div class="blok4">
<div class="container">
        <div class="image">
            <img src="images/auto.png" alt="auto">
        </div>
        <div class="buttons-container">
            <div class="controls-container">
                <input type="checkbox" id ="on" name="svetlomety" required><br><br>
                <label for="on" class="checkbox-label">Add</label>
                <div class="label">Světlomety</div>
            </div>
            <div class="row">
                <?php generateColorButtons(); ?>
            </div>
        </div>
    </div>
</div>

</body>