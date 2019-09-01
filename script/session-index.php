<?php
session_start();
if (isset($_SESSION["USER_INFO"])) {
    header("location: ../duckinder.php");
}