<?php
require "getColor.php";


function getColorFromDB(){
    $id = "";
    if(isset($_GET["getColorRGB"])){
        $id = $_GET["getColorRGB"];
    }
    $colorNames = getColorNames();

    foreach ($colorNames as $color) {
        if ($color['id'] == $id) {
            return $color['rgb'];
        }
    }
}

echo getColorFromDB();
?>
