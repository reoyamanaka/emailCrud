<?php
    include "../db.php";
    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    // Created a template
    $sql = "INSERT INTO emailList (email, created) VALUES (?, NOW());";

    // Create a prepared statement
    $stmt = mysqli_stmt_init($conn);

    // Prepare the prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed!"; 
    } else {
        // Bind parameter to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $email);
        // Run parameter inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        echo $result;
    }

    $conn -> query($sql);
    $conn -> close();
    header("location: index.php");
?>
