<?php
    include "../inc/day.php";
    $day = getDay();
    $res = array("day" => $day);
    echo json_encode($res);
