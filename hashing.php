<?php 
    $password = "password";
    //here password_default is use bcrypt algorithm
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash . "<br>";

    if (password_verify($password, $hash)) {
        echo "Password is valid!";
    } else {
        echo "Invalid password!";
    }
?>