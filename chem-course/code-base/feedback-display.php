<?php

require_once 'dbc.php';

$sql = "SELECT * FROM chemedu_tb;";
$stmt = mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($stmt, $sql)){
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if($feedback){
        echo 'Fetched';
    }else{
        echo 'not fetched';
    }
}else{
    header('location: ../feedback.php?error=stmtfailed#feedback');
    exit();
}

?>