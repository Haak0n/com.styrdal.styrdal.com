<?php
function addrestaurant()
{
	if(isset($_POST["addname"]) && isset($_POST["addidname"]) && isset($_POST["addaddress"]) && isset($_POST["addnumber"]))
	{
		$addname = utf8_encode($_POST["addname"]);
		$addidname = utf8_encode($_POST["addidname"]);
		$addaddress = utf8_encode($_POST["addaddress"]);
		$addnumber = utf8_encode($_POST["addnumber"]);
		if(isset($_POST["adddaily"]))
		{
			$adddaily = utf8_encode($_POST["adddaily"]);
		}
		else
		{
			$adddaily = utf8_encode("false");
		}
		if(isset($_POST["addstandard"]))
		{
			$addstandard = utf8_encode($_POST["addstandard"]);
		}
		else
		{
			$addstandard = utf8_encode("false");
		}
		if(isset($_POST["addurl"]))
		{
			$addurl = utf8_encode($_POST["addurl"]);
			$urlarray = parse_url($addurl);
			if(!isset($urlarray["scheme"]))
			{
				$addurl = "http://" . $addurl;
			}
		}
		else
		{
			$addurl = null;
		}
		if(isset($_POST["addextra"]))
		{
			$addextra = utf8_encode($_POST["addextra"]);
		}
		else
		{
			$addextra = null;
		}
		
		$sqlitecon = new SQLIte3("database/restauranger.db");
		$addsql = "INSERT INTO restaurants (name, address, number, url, extra, idname, standard, daily, monday_open, tuesday_open, wednesday_open, thursday_open, friday_open, saturday_open, sunday_open, monday_close, tuesday_close, wednesday_close, thursday_close, friday_close, saturday_close, sunday_close) VALUES ('" . $addname . "', '" . $addaddress . "', '" . $addnumber . "', '" . $addurl . "', '" . $addextra . "', '" . $addidname . "', '" . $addstandard . "', '" . $adddaily . "', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00')";
		$sqlitecon->query($addsql);
		
		$addtablesql = "CREATE TABLE " . $addidname . " ("
				. "_id INTEGER PRIMARY KEY, "
				. "name TEXT, "
				. "number TEXT, "
				. "toppings TEXT, "
				. "extra TEXT, "
				. "price INTEGER, "
				. "altprice INTEGER)";
		$sqlitecon->query($addtablesql);
		updateVersion($sqlitecon);
		echo "Restaurang tillagd!";
	}
}
?>