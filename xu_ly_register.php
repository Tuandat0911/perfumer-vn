<?php
require_once('config.php');
$con = new mysqli (ConnectionInfo::$hostname, ConnectionInfo::$username, ConnectionInfo::$password, ConnectionInfo::$database);

$username = trim($_POST['username']);
$email = strtolower(trim($_POST['email']));
$password = trim($_POST['password']);


$register = "INSERT INTO account (username, email, password) VALUES ('$username', '$email', '$password')";

$check = 0;
if($con->query($register) === TRUE) {
    echo"success";
    $check = 1;
} else {
    echo"failed";
    $check = 2;
}
// Chuyển hướng với giá trị của biến check
header("Location: login.php?check=$check");
$con->close();

