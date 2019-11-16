<?php
    $con = mysqli_connect("DB 입력");
    mysqli_query($con, "SET NAMES utf8");

    //안드로이드 앱으로부터 아래 값들을 받음
    $userID = $_POST['userID'];
    $userPassword = $_POST['userPassword'];
    $userEmail = $_POST['userEmail'];
    $userCheck = 0;

    //insert 쿼리문을 실행함
    $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssss", $userID, $userPassword, $userEmail, $userCheck);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;

    echo json_encode($response);
?>