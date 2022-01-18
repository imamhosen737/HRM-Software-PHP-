<?php
// require_once("header.php");

for ($i=1; $i <29 ; $i++) { 
	$date='2021-02-'.$i;
	if(date('l', strtotime($date)) == 'Friday'){
// 		$data = $conn->query("INSERT INTO `attendance` (`attID`, `empID`, `type`, `punch_time`) VALUES (NULL, '16', 'in_time', '".$date." 08:31:00'), (NULL, '17', 'in_time', '".$date." 08:31:00')");
// $emp_name = $conn->query("INSERT INTO `attendance` (`attID`, `empID`, `type`, `punch_time`) VALUES (NULL, '16', 'out_time', '".$date." 17:31:00'), (NULL, '17', 'out_time', '".$date." 17:31:00')");
echo $date.'--'.date('l', strtotime($date)).'<br>';
	}
}





?>

<!-- MondayTuesdayWednesdayThursdayFridaySaturdaySundayMondayTuesdayWednesdayThursdayFridaySaturdaySundayMondayTuesdayWednesdayThursdayFridaySaturdaySundayMondayTuesdayWednesdayThursday -->