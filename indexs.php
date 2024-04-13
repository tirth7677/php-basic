<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is login page <br>
    <form action="indexs.php" method="post">
        </label>Username: </label>
        <input type="text" name="username">
        <br>
        <label>Password: </label>
        <input type="password" name="password">
        <br>
        <input type="submit" name="Login" value="login">
    </form>

</body>

</html>

<?php
if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password are not empty
    if (!empty($username) && !empty($password)) {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        // echo $_SESSION["username"] . "<br>";
        // echo $_SESSION["password"];
        header("Location: home.php");
    } else {
        echo "Please enter both username and password.";
    }
}
?>