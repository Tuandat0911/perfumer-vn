<?php
require_once('config.php');
$con = new mysqli (ConnectionInfo::$hostname, ConnectionInfo::$username, ConnectionInfo::$password, ConnectionInfo::$database);

    $email_login = strtolower(trim($_POST['email_login']));
    $password_login = trim($_POST['password_login']);
    $login = "SELECT * FROM account WHERE email = '$email_login' AND password = '$password_login'";
    $result = $con->query($login);
    $obj = null;
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $obj = $row;
        }
    }
    $check = 0;
    if($obj == null){
        $check = 3;
    }
    else {
        $check = 4;
        session_start();
        $_SESSION['username'] = $obj['username'];
    }
    header("Location:login.php?check=$check");
    $con->close();
?>
