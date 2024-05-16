<?php
require "db/getColorNamesForButtons.php";

function generateColorButtons() {
    $colorNames = getColorNames();
    $chunks = array_chunk($colorNames, ceil(count($colorNames) / 2));

    foreach ($chunks as $row) {
        echo '<div class="row">';
        foreach ($row as $color) {
            echo '<button class="button" style="background-color: ' . $color['rgb'] . ';" data-color-id="' . $color['id'] . '"></button>';
        }
        echo '</div>';
    }
}
?>