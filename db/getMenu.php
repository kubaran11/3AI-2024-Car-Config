<?php
require "db/conn.php";  
function getMenuItems($id) {
    $conn = $GLOBALS["conn"]; 
    $menuItems = array();  
    $sql = "SELECT information FROM Menu WHERE id = ?";
    $stmt = $conn->prepare($sql); 
    $smtm = $bind_param("i", $id);
    $stmt->execute();  
    $stmt->bind_result($itemName);  
    $smtm->fetch();
    return $menuItems; 
}
?>
