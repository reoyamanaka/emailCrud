<?php
    include "../db.php";
    $email = $_POST["email"];
    $sql = "INSERT INTO emailList (email, created) VALUES ('$email', NOW())";
    $conn -> query($sql);
    $conn -> close();
    header("location: index.html");
?>
