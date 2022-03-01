<?php
function getAnnounceArray(){
	$username=getenv('HTTP_DB_USER');
	$password=getenv('HTTP_DB_PASS');
	$database=getenv('HTTP_DB_NAME');
	$hostname=getenv('HTTP_DB_HOSTNAME');
	$query = "Select 'ID', `Timestamp`, `Username`, `Groupteam`, `Announce`, `Startdate`, `Enddate`, DATEDIFF(Enddate , Startdate) as 'ddate' from announcements where `Startdate` <= CURDATE( ) AND  `Enddate` >= CURDATE( ) AND DATEDIFF(Enddate , Startdate) < 100";

	$db = new mysqli($hostname, $username, $password, $database);
	$Result = $db->query($query);
	$db -> close();
	
	$announcements_array = array();
	if ($Result) {
		while($row = $Result->fetch_array(MYSQLI_ASSOC)) {
            array_push($announcements_array, $row["Groupteam"]." - ".$row["Announce"]);
		}
    }
	if (empty($announcements_array)) {
		array_push($announcements_array, "No announcements today!");
	}
	
	return $announcements_array;	
}