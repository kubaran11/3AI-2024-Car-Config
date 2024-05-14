<?php
require "getColor.php";


function getTableSize(){
    $size = 0;

    $colorNames = getColorNames();
    foreach ($colorNames as $color) {
        $size += 1;
    }
    return $size;
}
echo getTableSize();
?>