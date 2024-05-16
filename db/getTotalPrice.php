<?php

require "db/conn.php";

function getBodyPriceById($id) {
    $conn = $GLOBALS["conn"];
    $sql = "SELECT price FROM Body WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($price);
    $stmt->fetch();
    return $price;
}

function getColorPriceById($id) {
    $conn = $GLOBALS["conn"];
    $sql = "SELECT price FROM Colors WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($price);
    $stmt->fetch();
    return $price;
}

function getCarPriceById($id) {
    $conn = $GLOBALS["conn"];
    $sql = "SELECT price FROM Car WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($price);
    $stmt->fetch();
    return $price;
}

function getAddonPriceById($id) {
    $conn = $GLOBALS["conn"];
    $sql = "SELECT price FROM Addons WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($price);
    $stmt->fetch();
    return $price;
}

function calculateTotalPrice($bodyId, $colorId, $carId, $addonIds) {
    $totalPrice = 0;

    // Get price for body part
    $bodyPrice = getBodyPriceById($bodyId);
    $totalPrice += $bodyPrice;

    // Get price for color
    $colorPrice = getColorPriceById($colorId);
    $totalPrice += $colorPrice;

    // Get price for car
    $carPrice = getCarPriceById($carId);
    $totalPrice += $carPrice;

    // Get prices for addons
    foreach ($addonIds as $addonId) {
        $addonPrice = getAddonPriceById($addonId);
        $totalPrice += $addonPrice;
    }

    return $totalPrice;
}

$totalPrice = calculateTotalPrice($bodyId, $colorId, $carId, $addonIds);
echo $totalPrice;

?>