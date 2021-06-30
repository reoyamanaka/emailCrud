<?php
    include "../db.php";
    $sql = "SELECT * FROM emailList";
    $result = $conn -> query($sql);
    while ($row = $result -> fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    $conn -> close(); 
?>