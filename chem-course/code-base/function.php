<?php

//  check for empty input .. 
function emptyInputs($name,$email,$bodymsg){
    $result;
    if(empty($name) || empty($email) || empty($bodymsg)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidName($name){
    $result;
    if(!preg_match("/^[a-zA-Z0-9\s]*$/", $name)){ 
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function dbInsert($conn,$name,$email,$bodymsg){
    $sql = "INSERT INTO chemedu_tb(name,email,body) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header('header: ../index.php?error=stmtfailed#feedback');
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $bodymsg);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../feedback.php?error=none#feedback');
    exit();
}