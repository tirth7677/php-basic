<!-- there are two ways you can connect to the sql database
1) MySQLi extension mean MySQL Improved. It is a new extension for PHP that stands for MySQL Improved. It is a built-in extension in PHP 5.0.0 and later. It is used to connect to the MySQL database and perform various operations like creating, deleting, updating, and selecting database records.
2) PDO (PHP Data Objects) mean you can connect to any database like MySQL, Oracle, SQL Server, etc. -->


<!-- insert data into mysql php -->
<?php 
include("db.php");

$username = "herhtkjreh";
$password = "jhfdsfkjsd";
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (name,password) VALUES ('$username', '$hash')";

try{
    mysqli_query($conn, $sql);
    echo "User registered successfully";
}catch(Exception $e){
    echo "User is not registered";
}

mysqli_close($conn);
?>