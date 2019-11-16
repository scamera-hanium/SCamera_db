<?php
    // Create connection
    $con = mysqli_connect("DB 입력");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $result = mysqli_query($conn, "SELECT * FROM USER");

    $row = mysqli_fetch_row($result);

    echo"TEST : ";
    print_r($row);
    echo '<br>';
?>