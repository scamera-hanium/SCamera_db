<?php
    $con = mysqli_connect("localhost", "davichiar", "1234", "SCamera");
    mysqli_query($con, "SET NAMES utf8");

    //안드로이드 앱으로부터 아래 값들을 받음
    $name = $_POST['name'];
    $nameCheck = $_POST['nameCheck'];

    //insert 쿼리문을 실행함
    $statement = mysqli_prepare($con, "INSERT INTO search VALUES (?, ?)");
    mysqli_stmt_bind_param($statement, "ss", $name, $nameCheck);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;

    echo json_encode($response);
?>