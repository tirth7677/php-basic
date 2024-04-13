<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "exampledb";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "Connection failed: ";
}
if ($conn) {
    echo "Connected to the database";
} else {
    echo "Failed to connect to the database";
}
