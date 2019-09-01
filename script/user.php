<?php
require "./mysql-requests.php";
function fetch_user($username)
{
    $arr = mysql_db_query_fetch_array("SELECT * FROM User WHERE username ='$username'");
    return array(
        "idUser" => intval($arr['idUser']),
        "item_name" => $arr['item_name'],
        "username" => $arr['username'],
        "description" => $arr['description'],
        "image" => $arr['image']
    );
}
