<?php


function mysql_db_query($query)
{
    // global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    require "../config/credential.php";
    $connect = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);

    if (!$connect) {
        echo mysqli_error($connect);
    }

    $result = mysqli_query($connect, $query);
   
    if ($result) {
        return $result;
    } else {
        echo mysqli_error($connect);
    }
}
function mysql_db_query_fetch_array($query)
{    
    return mysqli_fetch_array(mysql_db_query($query));
}

?>