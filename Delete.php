<?php
    $con = mysqli_connect("DB 입력");
    mysqli_query($con, "SET NAMES utf8");

    //delete 쿼리문을 실행함
    $statement = mysqli_prepare($con, "DELETE FROM search");
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;

    echo json_encode($response);
?>