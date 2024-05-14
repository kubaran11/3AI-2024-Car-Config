<?php
include("../../db/getColor.php")

function getColorRGB($index){
    $colorNames = getColorNames();
    
    if ($index >= 0 && $index < count($colorNames)) {
        $color = $colorNames[$index];
        return $color['rgb'];
    } else {
        return null;
    }
}
?>