<!-- <?php ?>  this is the starting and ending of the php cmd -->
<!-- echo is used to print the output -->


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> -->
<!-- <button>Hello</button> -->
<!-- <form action="index.php" method="get"> -->
<!-- <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username">
        <br>
        <br>
        <label>password: </label>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" value="Log in">
    </form> -->

<!-- Pizza example -->
<!-- <form action="index.php" method="post">
        <label>Quantity: </label>
        <input type="number" name="quantity">
        <input type="submit" value="Order">
    </form> -->

<!-- Math functions -->
<!-- <form action="index.php" method="post">
        
        <label>X: </label>
        <input type="text" name="x">
        <br>
        <label>y: </label>
        <input type="text" name="y">
        <br>
        <label>Z: </label>
        <input type="text" name="z">
        <br>
        <input type="submit" value="Calculate">
    </form> -->

<!-- Isset and empty function  -->
<!-- <form action="index.php" method="post">
        <label></label>Username: </label>
        <input type="text" name="username">
        <br>
        <label>Password: </label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Log in">
    </form> -->

<!-- Radio button -->
<!-- <form action="index.php" method="post">
        <input type="radio" name="card" value="visa">
        <label>Visa</label><br>
        <input type="radio" name="card" value="mastercard">
        <label>Master</label><br>
        <input type="radio" name="card" value="american">
        <label>American express</label><br>
        <input type="submit" name="confirm" value="Submit">
    </form> -->

<!-- Checkbox -->
<!-- <form action="index.php" method="post">
        <input type="checkbox" name="food[]" value="pizza">Pizza<br>
        <input type="checkbox" name="food[]" value="burger">Burger<br>
        <input type="checkbox" name="food[]" value="fries">Fries<br>
        <input type="submit" name="submit" value="Order">
    </form> -->

<!-- santize and validate -->
<!-- <form action="index.php" method="post">
        <label>Username: </label>
        <input type="text" name="username">
        <input type="submit" name="login" value="Submit">
    </form> -->

<!-- Include -->
<!-- This is the home Page -->
<!-- </body>

</html> -->


<!-- <?php
///////////////////////////////////var/////////////////////////////////////////////
// echo "Hello! <br>";
// echo "Tirth";
// $name = "dsknfisd";
// $age = 20;
// $floatss = 20.5;
// $bool = true;
// $arr = array("Tirth", "Raj", "Rajesh");
// $a = 10;
// $b = 20;
// $total = $a + $b;

// echo "Total is {$total}";
// echo "your price \${$floatss}";
//echo "<br> {$bool}";
// echo "<br> {$arr[0]}";
// echo "<br> {$age}";
// echo $name;
// echo "hello {$name}"

////////////////////////////////////////arithmetic/////////////////////////////////////////

// $x = 10;
// $y = 20;
// // $z = null;

// $z = $y + $x;
// $z = $y ** $x;
// echo "$z"

///////////////////////////////////////////inc,dec/////////////////////////////////////////
// $counter = 0;
// $counter++;
// $counter--;
// echo $counter;

/////////////////////////////////////////get method////////////////////////////////////////
// Data is appended to the url;
// NOT SECURE;
// char limit;
// Bookmarks is possible with values;
// GET request can be cached;
// Better for Search Page;


// echo "{$_GET["username"]} <br>";
// echo $_GET["password"];

////////////////////////////////////////post method///////////////////////////////////////
// Data is packaged inside the body of the HTTP request
// MORE SECURE
// No Data limit
// cannot Bookmark
// GET requests are not cached
// Better for sunbmitting credentials
// echo "{$_POST["username"]} <br>";
// echo $_POST["password"];

////////////////////////////////////////////Pizza post request/////////////////////////////////////////////
// $item = "Pizza";
// $price = 6.23;
// $quantity = $_POST["quantity"];
// $total = $quantity * $price;
// echo "your total is {$total} and the quantity is {$quantity} <br>";

///////////////////////////////////////////Maths function/////////////////////////////////////////////////////
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// echo $x;
// echo $y;
// $total = null;
// $total = abs($x); //convert into +ve value
// echo "<br> {$total}";
// $total = sqrt($x); //square root
// echo "<br> {$total}";
// $total = round($x); //round off
// echo "<br> {$total}";
// $total = ceil($x); //round off to upper value
// echo "<br> {$total}";
// $total = floor($x); //round off to lower value
// echo "<br> {$total}";
// $total = pow($x, $y); //power
// echo "<br> {$total}";
// $total = sqrt($x); //square root
// echo "<br> {$total}";
// $total = max($x, $y, $z); //max value
// echo "<br> {$total}";
// $total = min($x, $y, $z); //min value
// echo "<br> {$total}";
// $total = pi(); //pi value
// echo "<br> {$total}";
// $total = rand(1, 100); //random value
// echo "<br> {$total}";

//////////////////////////////////////////if else///////////////////////////////////////////
// $age = 20;
// if ($age >= 20) {
//     echo "You are eligible";
// } elseif ($age == 0) {
//     echo "hello";
// } else {
//     echo "You are not eligible";
// }
// $adult = false;
// if($adult){
//     echo "You are an adult";
// }else{
//     echo "You are not an adult";
// }   

//////////////////////////////////////////logical operator/////////////////////////////////
// 3) &&, ||, !
// $temp = 20;
// $cloud = true;
// if($temp >= 0 && $temp <=30){
//     echo "The temperature is normal";
// }else{
//     echo "The temperature is not normal";
// }

// if(!$cloud){
//     echo "The sky is clear";
// }else{
//     echo "The sky is not clear";
// }

///////////////////////////////////switch case///////////////////////////////////////////
// $grade = "A";
// switch ($grade) {
//     case "A":
//         echo "You are a good student";
//         break;
//     case "B":
//         echo "You are an average student";
//         break;
//     case "C":
//         echo "You are a bad student";
//         break;
//     default:
//         echo "{$grade} this grade is invalid";
//         break;
// }
// $date = date("Y-m-d");
// $date = date("l"); // current day
// echo $date;

//////////////////////////////////////for loop///////////////////////////////////////////
// for($i = 0;$i <=10;$i++){
//     $i++;
//     echo "{$i} <br>";
// }

////////////////////////////////////while loop///////////////////////////////////////////
//while loop we can use infinite number of time maybe and for loop we can use limited number of time
// $i = 0;
// while ($i < 10) {
//     $i++;
//     echo "{$i} <br>";
// }

//////////////////////////////////Array///////////////////////////////////////////////
// $food = array("fries", "pizza", "burger");
// $food[2] = "pasta";
// array_push($food, "ice cream","chocolate");
// array_pop($food); //remove the last element
// array_shift($food); //remove the first element
// $temp = array_reverse($food); // result always show in new array
// foreach ($temp as $value) {
//     echo "{$value} <br>";
// }
// echo count($food);

/////////////////////////////associative array///////////////////////////////////////
// associative array = an array made of key=>value pairs
// write normal array and add => between key and value
// $capital = array("India" => "New Delhi", "USA" => "Washington", "UK" => "London");
// $capital["Nepal"] = "Kathmandu"; //add new element
// echo $capital["India"];
// array_pop($capital); //remove the last element
// array_shift($capital); //remove the first element
// $keys = array_keys($capital); //only return keys
// $values = array_values($capital); //only return values
// $fliparr = array_flip($capital); //flip the key and value
// $reversearr = array_reverse($capital); //reverse the array
// echo count($capital);


// foreach($values as $value){
//     echo "value is {$value} <br>";
// }

// foreach ($keys as $value){
//     echo "key is {$value} <br>";
// }

// foreach ($fliparr as $key => $value){
//     echo "key is {$key} and value is {$value} <br>";
// }

// foreach ($reversearr as $key => $value){
//     echo "key is {$key} and value is {$value} <br>";
// }

// foreach ($capital as $key => $value){
//     echo "key is {$key} and value is {$value} <br>";
// }

//////////////isset() and empty() function///////////////////////////
// isset() = return true if a varaible is declared and not null
// empty() = return true if a variable is not declared,false,
// use case if i do login so i need to check if my username and password is empty or not

// $name = "Tirth";
// echo isset($name); // true 1
// $names = null;
// echo isset($names); // false display nothing

// $username = $_POST["username"];
// $password = $_POST["password"];

// if (empty($username)) {
//     echo "Please fill the username";
// } elseif (empty($password)) {
//     echo "Please fill the password";
// } else {
//     echo "Welcome {$username}";
// }

///////////////////////////////////////////radio button///////////////////////////////////////////
// if (isset($_POST["confirm"])) {
//     if (isset($_POST["card"])) {
//         $card = $_POST["card"];
//         echo "You have selected {$card}";
//     }
//     else{
//         echo "Please select the card";
//     }
// }

//////////////////////////////////////////checkbox///////////////////////////////////////////
// if (isset($_POST["submit"])) {
//     // if (isset($_POST["pizza"])) {
//     //     echo "You have selected pizza <br>";
//     // }
//     // if (isset($_POST["burger"])) {
//     //     echo "You have selected burger <br>";
//     // }
//     // if (isset($_POST["fries"])) {
//     //     echo "You have selected fries <br>";
//     // }
//     if (!empty($_POST["food"])) {
//         $food = $_POST["food"];
//         foreach ($food as $value) {
//             echo "You have selected {$value} <br>";
//         }
//         echo "You have selected " . count($food) . " items";
//     } else {
//         echo "Please select at least one item";
//     }
// }

///////////////////////////////////function ////////////////////////////////
// function hello($name, $age){
//     echo "Hello {$name} {$age} <br>";
// }
// hello("Tirth",20);

// function evenorodd(int $a){
//     if($a % 2 == 0){
//         echo "Even";
//     }else{
//         echo "Odd";
//     }
// }
// evenorodd(10);

////////////////////////////////////string function//////////////////////////////////////

// $username = "Tirth Malli";
// $temp = array("Tirth","malli","dshfuidshf");
// $phone = "12-34-56-78";

// echo strlen($username); //length of the string
// echo "<br>";
// echo strtolower($username); //convert into lower case
// echo "<br>";
// echo strtoupper($username); //convert into upper case
// echo "<br>";
// echo trim($username); //remove the white space
// echo "<br>";
// echo str_pad($username, 20, "*"); //add the * in the end
// echo "<br>";
// echo str_replace("-", "*", $phone); //replace the string
// echo "<br>";
// echo strrev($username); //reverse the string
// echo "<br>";
// echo str_shuffle($username); //shuffle the string
// echo "<br>";
// echo strcmp($username, "Tirth Malli"); //compare the string, if true return 0 and false return -1
// echo "<br>";
// echo strpos($username, "Malli"); //return the position of the string
// echo "<br>";
// echo substr($username, 0, 5); //return the substring return new string
// echo "<br>";
// $fullname = explode(" ", $username); //convert into array
// foreach($fullname as $value){
//     echo "{$value} <br>";
// }
// $ff = implode("-", $temp); //convert into string
// echo $ff;

//////////////////////////////////////sanitize and validate//////////////////////////////////////
// Validating data = Determine if the data is in proper form. Sanitizing data = Remove any illegal character from the data.
// In PHP, FILTER_SANITIZE_SPECIAL_CHARS is a filter that sanitizes a string by converting special characters to HTML entities. This function is commonly used to prevent XSS (Cross-site Scripting) attacks by escaping characters that have special meaning in HTML, such as <, >, ", ', and &, into their respective HTML entity equivalents.

// For example:

// < is converted to &lt;
// > is converted to &gt;
// " is converted to &quot;
// ' is converted to &#39;
// & is converted to &amp;
// This ensures that any user input containing HTML or JavaScript code will be rendered as plain text rather than executed as code, thus enhancing the security of web applications.
// if(isset($_POST["login"])){
//     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
//     echo "hello {$username} <br>";
// }

// example:
// $input = "abc123def";
// $filtered_input = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
// echo $filtered_input; // Output: 123

// $email = "user@example.com?subject=hello";
// $filtered_email = filter_var($email, FILTER_SANITIZE_EMAIL);
// echo $filtered_email; // Output: user@example.com

//VALIDATE IF NOT PASS THEN IT RETURN EMPTY STRING
// $age = filter_input(INPUT_POST,"$age",FILTER_VALIDATE_INT);
// if(empty($age)){
//     echo "Please enter the age";
// }else{
//     echo "Your age is {$age}";
// }

// $email = filter_input(INPUT_POST,"$email",FILTER_VALIDATE_EMAIL);
// if(empty($email)){
//     echo "Please enter the email";
// }else{
//     echo "Your email is {$email}";
// }

///////////////////////////////include ///////////////////////////////////////////
// include("header.html");
// include("footer.html");

///////////////////////////cookie///////////////////////////////////////////
//cookie = information about a user stored in a user's web browser (store non sensitive data)
// cookie store as a accociative array

// first is key, second is value, third is time, fourth is file path
// setcookie("fav_food","Pizza",time()+ 86400, "/"); //1 day
// setcookie("fav_drink","Monster",time()+ 86400, "/"); //1 day
// setcookie("fav_place","new york",time()+ 86400, "/"); //1 day
// to delete the cookie set the time to -0
// setcookie("fav_food","Pizza",time() - 0, "/"); //1 day

//now display all the cookie
// foreach($_COOKIE as $key => $value){
//     echo "{$key} => {$value} <br>";
// }

// if(isset($_COOKIE["fav_food"])){
//     echo "Your favourite food is {$_COOKIE["fav_food"]}";
// }

//////////////////////////////session//////////////////////////////////////////
// session = SGB used to store info on a user to be used across a multiple pages. a user assisgned a session id example login crednetials
// to start session
// session_start();
// ?>

<?php
//here i like to access this value from my home.php
// $_SESSION["username"] = "Tirth";
// $_SESSION["password"] = "12345";
// echo $_SESSION["username"] . "<br>";
// echo $_SESSION["password"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    cc
</body>

</html>

<?php
session_start();

if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Check if username and password are not empty
    if (!empty($username) && !empty($password)) {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        echo $_SESSION["username"] . "<br>";
        echo $_SESSION["password"];
    } else {
        echo "Please enter both username and password.";
    }
}
?>