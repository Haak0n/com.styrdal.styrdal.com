<?php
adddaily();
	
//Getting idname. Getting from database if lvl == 2, from post if lvl != 2 and null if no post
if ($lvl == 2)
{
	$idnamesql = "SELECT idname FROM admin WHERE uname = '". $_SESSION["uname"] . "'";
	$idnameresult = mysqli_query($con, $idnamesql);
	$idnamerow = mysqli_fetch_assoc($idnameresult);
	$idname = $idnamerow["idname"];
}
else
{
	if (isset($_POST["idname"]))
	{
		$idname = $_POST["idname"];
	}
	else
	{
		$idname = null;
	}
}

//Getting the visible week. Current week if nothing selected.
if(isset($_POST['weeks']))
{
	$week = $_POST['weeks'];
}
elseif(isset($_POST['week']))
{
	$week = $_POST['week'];
}
else
{
	date_default_timezone_set("Europe/Stockholm");
	$week = date("W");
}
	
//Form for showing weeks. Includes input for idname if lvl != 2
echo "<form action='../index.php?p=admin&s=daily' method='post'>
				Välj vecka<br />
				<select name='weeks'>";

for($i = 0; $i < 52; $i++)
{
	$number = $i + 1;
	if($number == $week)
	{
		
		echo "<option selected value='". $number ."'>" . $number ."</option>";
	}
	else
	{
		echo "<option value='". $number ."'>" . $number ."</option>";
	}
}
echo "</select></p><p>";

if($lvl != 2)
{
	echo "idname<br />
	<input class='input1' type='text' name='idname' value='". $idname ."' /></p><p>";
}
	
echo "<input class='input2' type='submit' value='Visa' />
	</form><hr />";
		
$sqlitecon = new SQLIte3("database/restauranger.db");
$sqlitesql = "SELECT text FROM daily WHERE idname = '". $idname ."' AND week = '". $week ."' ORDER BY day ASC";
$sqlresult = $sqlitecon->query($sqlitesql);

for ($i = 1; $i < 8; $i++)
{
	$dailytext[$i] = null;
}
	
$i = 1;
while($sqliterow = $sqlresult->fetchArray(SQLITE3_ASSOC))
{
	$dailytext[$i] = $sqliterow["text"];
	$i++;
}

	
echo "<form action='../index.php?p=admin&s=daily' method='post'>
	Måndag<br />
	<input class='input1' type='text' name='d1' value='". $dailytext[1] ."' /></p><p>
	Tisdag<br />
	<input class='input1' type='text' name='d2' value='". $dailytext[2] ."' /></p><p>
	Onsdag<br />
	<input class='input1' type='text' name='d3' value='". $dailytext[3] ."' /></p><p>
	Torsdag<br />
	<input class='input1' type='text' name='d4' value='". $dailytext[4] ."' /></p><p>
	Fredag<br />
	<input class='input1' type='text' name='d5' value='". $dailytext[5] ."' /></p><p>
	Lördag<br />
	<input class='input1' type='text' name='d6' value='". $dailytext[6] ."' /></p><p>
	Söndag<br />
	<input class='input1' type='text' name='d7' value='". $dailytext[7] ."' /></p><p>
	<input class='input2' type='submit' value='Lägg Till' /></p><br />
	<input type='hidden' name='idname' value='". $idname ."' /><input type='hidden' name='week' value='". $week ."' />
				
	</form>";
?>