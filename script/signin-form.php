<?php
session_start();
require "./user.php";
$pass = $_POST['pass'];
$username = $_POST['username'];
error_log( "$username $pass");
if ( mysql_db_query_fetch_array("SELECT * FROM User WHERE username ='$username' AND pass = '$pass'")) {
    $login = true;
} else {
    $_SESSION["error"] = "Usuario não cadastrado. ;(";
    $login = false;
    header("location: ../index.php");    
}

if ($login) {
    $_SESSION['USER_INFO'] = fetch_user($username);
    header("location: ../duckinder.php");
}
