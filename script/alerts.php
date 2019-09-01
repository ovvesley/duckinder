<?php 
function signup_alert_message()
{
    if (isset($_SESSION["error"])) {
        echo ("
        <div class='alert alert-danger alert-dismissible fade show active text-center'>
            $_SESSION[error]
        </div>
        ");
        unset($_SESSION["error"]);
    }
    if (isset($_SESSION["registerOk"])) {
        echo ("
        <div class='alert alert-success alert-dismissible fade show active text-center'>
        $_SESSION[registerOk]
        </div>
        ");
        unset($_SESSION["registerOk"]);
    }
}

function signin_alert_message(){
    
}
