<?php

require "conn.php";  

function getMenuItems() {
    $conn = $GLOBALS["conn"]; 

    $menuItems = array();  


    $sql = "SELECT information FROM Menu";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();  
    $stmt->bind_result($itemName);  

    while ($stmt->fetch()) {
        array_push($menuItems, $itemName);
    }

    return $menuItems; 
}

?>
