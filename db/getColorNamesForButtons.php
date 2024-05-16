<?php
require "db/conn.php";

function getColorNames() {
    global $conn;

    $colorNames = array();

    $sql = "SELECT id, RGB, price, name FROM Color";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($id, $rgb, $price, $name);
    while ($stmt->fetch()) {
        array_push($colorNames, array("id" => $id, "name" => $name, "rgb" => $rgb, "price" => $price));
    }

    $stmt->close();
    return $colorNames;
}
?>