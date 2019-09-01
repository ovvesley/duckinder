<?php
session_start();
if(!isset($_SESSION["USER_INFO"])){
    header("location: ../error.php"); 
}else{
    header("location:../duckinder.php");
}
?>