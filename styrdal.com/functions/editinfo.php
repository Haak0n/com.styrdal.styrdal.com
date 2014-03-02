<?php
function editinfo()
{
	$sqlitecon = new SQLIte3("database/restauranger.db");
	if(isset($_POST["iname"]) || isset($_POST["iaddress"]) || isset($_POST["inumber"]) || isset($_POST["iurl"]) || isset($_POST["iextra"]))
	{
		$name = $_POST["iname"];
		$address = $_POST["iaddress"];
		$number = $_POST["inumber"];
		$url = $_POST["iurl"];
		$urlarray = parse_url($url);
		if(!isset($urlarray["scheme"]))
		{
			$url = "http://" . $url;
		}
		
		if(isset($_POST["istandard"]) && $_POST["istandard"] == "true")
		{
			$standard = "true";
		}
		else
		{
			$standard = "false";
		}
		if(isset($_POST["idaily"]) && $_POST["idaily"] == "true")
		{
			$daily = "true";
		}
		else 
		{
			$daily = "false";
		}
		
		
		$extra = $_POST["iextra"];
		$idname = $_POST["idname"];
		
		$infosql = "UPDATE restaurants SET 
			name = '" . $name ."', 
			address = '" . $address ."', 
			number = '" . $number . "', 
			url = '" . $url . "', 
			extra = '" . $extra . "', 
			standard = '" . $standard . "', 
			daily = '" . $daily . "'
			WHERE idname = '" . $idname . "'";
		$inforesult = $sqlitecon->query($infosql);
		echo "Information uppdaterad!<br />";
	}
}
?>