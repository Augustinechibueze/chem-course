<?php

require_once 'dbc.php';
require_once 'function.php';

if(isset($_POST['submit'])){

    // grab user data .. 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bodymsg = $_POST['bodymsg'];

    // Error handling and validation ... 
    if(emptyInputs($name,$email,$bodymsg) !== false){
        header('location: ../index.php?error=emptyinputs#feedback');
        exit();
    }
    if(invalidName($name) !== false){
        header('location: ../index.php?error=invalidname#feedback');
        exit();
    }

    dbInsert($conn,$name,$email,$bodymsg);


}else{
    header('location: ../index.php?error=unauthorised&access#feedback');
}

