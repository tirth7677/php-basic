<?php 
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <label>username: </label>
    <input type="text" name="username" required><br>
    <label>password: </label>
    <input type="password" name="password" required><br>
    <input type="submit" name="submit" value="Register"> 
    </form>
</body>
</html>


<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password",FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($username) || empty($password)){
        echo "Please fill all the fields";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
}
mysqli_close($conn);
?>