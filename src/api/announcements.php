<?php 
    include "../inc/announcements.php";
    $announcements_array = getAnnounceArray(false);
    $res = array("announcements" => $announcements_array);
    echo json_encode($res);
