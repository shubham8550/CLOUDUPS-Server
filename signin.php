<?php
require "conn.php";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql= "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
    $stat=array("status" => "success");
    $stat = json_encode($stat);
    echo $stat;
}else{
    $stat=array("status" => "Wrong username or password");
    $stat = json_encode($stat);
    echo $stat;
}

?>