<?php
require 'conn.php';

function getImageUrl($colorId, $addonsId) {
    global $conn;
    
    $sql = "SELECT url FROM Model WHERE idColor = ? AND idBody = 1 AND idAddons = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $colorId, $addonsId);
    $stmt->execute();
    $stmt->bind_result($url);
    $stmt->fetch();
    
    $stmt->close();
    return $url;
}

$colorId = isset($_GET['colorId']) ? intval($_GET['colorId']) : 0;
$addonsId = isset($_GET['addonsId']) ? intval($_GET['addonsId']) : 2;

$url = getImageUrl($colorId, $addonsId);

echo json_encode(['url' => $url]);
?>
