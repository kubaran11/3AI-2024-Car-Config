<?php
require "conn.php";  
function getMenuItems($id) {
    $conn = $GLOBALS["conn"]; 
    $menuItems = array();  
    $sql = "SELECT information FROM Menu WHERE id = ?";
    $stmt = $conn->prepare($sql); 
    $smtm = $bind_param("int")$id;
    $stmt->execute();  
    $stmt->bind_result($itemName);  
    $smtm->fetch();
    return $menuItems; 
}

?>
