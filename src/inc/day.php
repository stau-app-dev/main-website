<?php
function getDay()
{
    $username=getenv('HTTP_DB_USER');
    $password=getenv('HTTP_DB_PASS');
    $database=getenv('HTTP_DB_NAME');
    $hostname=getenv('HTTP_DB_HOSTNAME');
    $query = "SELECT * FROM  `dayonetwo` WHERE  `Date` = CURDATE( )";

    $db = new mysqli($hostname, $username, $password, $database);
    $Result = $db->query($query);
    $db -> close();
    
    $row = $Result->fetch_array(MYSQLI_ASSOC);
    
    $day = "";
    if ($row) {
        $day = $row["Day"];
    }
    return $day;
}
