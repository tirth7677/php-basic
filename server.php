<!-- $_SERVER = SGB that contains headers, paths, and script locations.
the entries in this array are created by the web server.
show nearly everything you need to know about the web page env. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label>Username</label>
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php 
// foreach($_SERVER as $key_name => $key_value) {
//     echo $key_name . " = " . $key_value . "<br>";
// }
if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello " . $_POST["username"] . "!<br>";
}
?>