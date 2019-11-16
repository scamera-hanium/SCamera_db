<?php
    $con = mysqli_connect("DB 입력");
    mysqli_query($con, "SET NAMES utf8");

    //안드로이드 앱으로부터 아래 값들을 받음
    $name = $_POST['name'];
    $nameCheck = $_POST['nameCheck'];

    //insert 쿼리문을 실행함
    $statement = mysqli_prepare($con, "SELECT name FROM search");
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $name);

    $response = array();
    $response["success"] = false;

    while(mysqli_stmt_fetch($statement)){
      $response["success"] = true;
      $response["name"] = $name;
    }
    
    echo json_encode($response);
?>