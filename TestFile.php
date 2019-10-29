<?php
    $servername = "localhost";
    $username = "davichiar";
    $password = "1234";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, "SCamera");

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