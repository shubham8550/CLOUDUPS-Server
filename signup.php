<?php
require "conn.php";

$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$email=$_REQUEST["email"];



$sql = "INSERT INTO users (username, password, email)
VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    
    $stat=array("status" => "Account created successfully now you can login into your account");
    $stat = json_encode($stat);
    echo $stat;
} else {
    $stat=array("status" => "Unable to create account account maybe already username already exist");
    $stat = json_encode($stat);
    echo $stat;
}

$conn->close();
?>