<?php
    $con = mysqli_connect("localhost", "davichiar1", "a1b1c1**", "davichiar1");

    //안드로이드 앱으로부터 아래 값들을 받음
    $userID = $_POST['userID'];
    $userCheck = $_POST['userCheck'];

    //insert 쿼리문을 실행함
    $statement = mysqli_prepare($con, "UPDATE USER SET userCheck = (?) WHERE userID = (?)");
    mysqli_stmt_bind_param($statement, "ss", $userCheck, $userID);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;

    echo json_encode($response);
?>