<?php

/*how to creat database*/
$servername = "localhost";
$username = "root";
$password= "";
$dbname ="devahray_practice";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed:" . mysqli_connect());
}


$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO user_information (name, username,email,password,date) VALUE('$name', '$username', '$email', '$password', '$date')";
mysqli_query($conn, $sql);

echo "New user registration:<br>";
echo "Name: $name <br>";
echo "Email: $email <br>";
echo "username: $username <br>";
echo "password: $password";
?>