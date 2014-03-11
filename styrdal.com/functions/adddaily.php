<?php
function adddaily()
{
	$sqlitecon = new SQLIte3("database/restauranger.db");
	if(isset($_POST['d1']))
	{
		
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d1"]);
		
		$d1sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '1'";
		$sqlitecon->query($d1sql1);
		
		$d1sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '1', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d1sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d2']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d2"]);
	
		$d2sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '2'";
		$sqlitecon->query($d2sql1);
	
		$d2sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '2', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d2sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d3']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d3"]);
	
		$d3sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '3'";
		$sqlitecon->query($d3sql1);
	
		$d3sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '3', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d3sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d4']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d4"]);
	
		$d4sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '4'";
		$sqlitecon->query($d4sql1);
	
		$d4sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '4', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d4sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d4']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text =utf8_encode( $_POST["d4"]);
	
		$d4sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '4'";
		$sqlitecon->query($d4sql1);
	
		$d4sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '4', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d4sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d5']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d5"]);
	
		$d5sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '5'";
		$sqlitecon->query($d5sql1);
	
		$d5sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '5', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d5sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d6']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d6"]);
	
		$d6sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '6'";
		$sqlitecon->query($d6sql1);
	
		$d6sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '6', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d6sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d7']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d7"]);
	
		$d7sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '7'";
		$sqlitecon->query($d7sql1);
	
		$d7sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '7', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d7sql2);
		
		updateVersion($sqlitecon);
	}

}
?>