<?php
    $con = mysqli_connect("localhost", "davichiar1", "a1b1c1**", "davichiar1");

    //delete 쿼리문을 실행함
    $statement = mysqli_prepare($con, "DELETE FROM search");
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;

    echo json_encode($response);
?>