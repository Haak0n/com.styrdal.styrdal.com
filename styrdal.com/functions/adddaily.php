<?php
function adddaily()
{
	$sqlitecon = new SQLIte3("database/restauranger.db");
	if(isset($_POST['d11']))
	{
		
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d11"]);
		if(isset($_POST['d12']))
		{
			$text2 = utf8_encode($_POST['d12']);
			$text = $text . "\\n" . $text2;
		}
		
		$d1sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '1'";
		$sqlitecon->query($d1sql1);
		
		$d1sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '1', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d1sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d21']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d21"]);
		if(isset($_POST['d22']))
		{
			$text2 = utf8_encode($_POST['d22']);
			$text = $text . "\\n" . $text2;
		}
		
		$d2sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '2'";
		$sqlitecon->query($d2sql1);
	
		$d2sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '2', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d2sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d31']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d31"]);
		if(isset($_POST['d32']))
		{
			$text2 = utf8_encode($_POST['d32']);
			$text = $text . "\\n" . $text2;
		}

		$d3sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '3'";
		$sqlitecon->query($d3sql1);
	
		$d3sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '3', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d3sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d41']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text =utf8_encode( $_POST["d41"]);
		if(isset($_POST['d42']))
		{
			$text2 = utf8_encode($_POST['d42']);
			$text = $text . "\\n" . $text2;
		}
	
		$d4sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '4'";
		$sqlitecon->query($d4sql1);
	
		$d4sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '4', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d4sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d51']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d51"]);
		if(isset($_POST['d52']))
		{
			$text2 = utf8_encode($_POST['d52']);
			$text = $text . "\\n" . $text2;
		}
	
		$d5sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '5'";
		$sqlitecon->query($d5sql1);
	
		$d5sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '5', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d5sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d61']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d61"]);
		if(isset($_POST['d62']))
		{
			$text2 = utf8_encode($_POST['d62']);
			$text = $text . "\\n" . $text2;
		}
	
		$d6sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '6'";
		$sqlitecon->query($d6sql1);
	
		$d6sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '6', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d6sql2);
		
		updateVersion($sqlitecon);
	}
	
	if(isset($_POST['d71']))
	{
	
		$idname = utf8_encode($_POST["idname"]);
		$week = utf8_encode($_POST["week"]);
		$text = utf8_encode($_POST["d71"]);
		if(isset($_POST['d72']))
		{
			$text2 = utf8_encode($_POST['d72']);
			$text = $text . "\\n" . $text2;
		}
	
		$d7sql1 = "DELETE FROM daily WHERE idname = '" . $idname . "' AND week = '" . $week . "' AND day = '7'";
		$sqlitecon->query($d7sql1);
	
		$d7sql2 = "INSERT INTO daily (idname, day, week, text) VALUES ('" . $idname . "', '7', '" . $week ."', '" . $text . "')";
		$sqlitecon->query($d7sql2);
		
		updateVersion($sqlitecon);
	}

}
?>