<?php
session_start();
require "./mysql-requests.php";

$username = $_POST['username'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];

$username_database = mysql_db_query_fetch_array("SELECT username FROM User WHERE username = '$username'")['username'];

if (!($username && $name && $pass && $repass)) {
    $_SESSION["error"] = "Os dados não são validos.";
    header("location: ../index.php");
} else {
    if ($pass != $repass) {
        $_SESSION["error"] = "As senhas não coincidem.";
        header("location: ../index.php");
    } else {
        if ($username == $username_database) {
            $_SESSION["error"] = "Usuario já cadastrado. Tente Outro :)";
            header("location: ../index.php");
        } else {
            $result = mysql_db_query("INSERT INTO `User` (`username`, `item_name`, `pass`) VALUES ('$username', '$name', '$pass')");
            if (!$result) {
                $_SESSION["error"] = "Ocorreu um erro. ;(";
                header("location: ../index.php");
            } else {
                $_SESSION["registerOk"] = "Cadastro realizado com sucesso.";
                header("location: ../index.php");
            }
        }

    }
}
