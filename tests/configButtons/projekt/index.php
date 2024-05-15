<?php
require "db/getCar.php";
require "db/getModel.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table frame=box rules=all>
        <tr><th>URL</th><th>Model</th><th>Color</th></tr>
    <?php
    foreach(getCarInfo() as $car){
        echo "<tr><td>" . $car["url"] . "</td><td>" . $car["model"] . "</td><td>" . $car["color"] . "</td></tr>";
    }
    ?>
    </table>
</body>
</html>