<?php
session_start();
$username = $_POST['username'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];

if (!($username && $name && $pass && $repass)) {
    $_SESSION["error"] = "Os dados não são validos.";
    header("location: ../index.php");
} else {
    if ($pass != $repass) {
        $_SESSION["error"] = "As senhas não coincidem.";
        header("location: ../index.php");
    } else {
        $_SESSION["registerOk"] = "Cadastro realizado com sucesso.";
        header("location: ../index.php");
    }
}
