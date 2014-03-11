<?php
function editinfo()
{
	$sqlitecon = new SQLIte3("database/restauranger.db");
	if(isset($_POST["iname"]) || isset($_POST["iaddress"]) || isset($_POST["inumber"]) || isset($_POST["iurl"]) || isset($_POST["iextra"]))
	{
		$name = utf8_encode($_POST["iname"]);
		$address = utf8_encode($_POST["iaddress"]);
		$number = utf8_encode($_POST["inumber"]);
		$url = utf8_encode($_POST["iurl"]);
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
		
		
		$extra = utf8_encode($_POST["iextra"]);
		$idname = utf8_encode($_POST["idname"]);
		
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
		updateVersion($sqlitecon);
		echo "Information uppdaterad!<br />";
	}
}
?>