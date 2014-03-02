<?php
function addnews($con)
{
	if(isset($_POST['ntopic']) || isset($_POST['ntext']) || isset($_POST['nuser'])) {
		if (empty($_POST['ntopic']) || empty($_POST['ntext']) || empty($_POST['nuser'])) {
			return "Fyll i alla fält!<br />";
		}
		else {
			date_default_timezone_set("Europe/Stockholm");
			$ntopic = $_POST['ntopic'];
			$ntext = nl2br($_POST['ntext']);
			$nuser = $_POST['nuser'];
			$ndate = date("d/m Y G:i:s");
				
				
			mysqli_query($con, "INSERT INTO news (topic, text, date, user) VALUES ('$ntopic', '$ntext', '$ndate', '$nuser')");
				
			mysqli_close($con);
	
			return "Nyhet tillagd!<br />";
		}
	}
}
?>