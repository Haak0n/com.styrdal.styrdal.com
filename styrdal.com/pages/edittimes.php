<?php
edittimes();

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
	echo "<form action='../index.php?p=admin&s=times' method='post'>
		idname<br />
		<input class='input4' list='weeks' name='idname' value='" . $idname . "' /><br /></p><p>
		<input class='input2' type='submit' value='Visa' />
		</form><hr />";
}

$sqlitecon = new SQLIte3("database/restauranger.db");
$sqlitesql = "SELECT monday_open, monday_close, tuesday_open, tuesday_close, wednesday_open, wednesday_close, thursday_open, thursday_close, friday_open, friday_close, saturday_open, saturday_close, sunday_open, sunday_close FROM restaurants WHERE idname = '". $idname ."'";
$sqlresult = $sqlitecon->query($sqlitesql);
$timesrow = $sqlresult->fetchArray(SQLITE3_ASSOC);

$mondayopenhour = substr($timesrow["monday_open"], 0, 2);
$mondayopenminute = substr($timesrow["monday_open"], 3, 2);
$mondayclosehour = substr($timesrow["monday_close"], 0, 2);
$mondaycloseminute = substr($timesrow["monday_close"], 3, 2);

$tuesdayopenhour = substr($timesrow["tuesday_open"], 0, 2);
$tuesdayopenminute = substr($timesrow["tuesday_open"], 3, 2);
$tuesdayclosehour = substr($timesrow["tuesday_close"], 0, 2);
$tuesdaycloseminute = substr($timesrow["tuesday_close"], 3, 2);

$wednesdayopenhour = substr($timesrow["wednesday_open"], 0, 2);
$wednesdayopenminute = substr($timesrow["wednesday_open"], 3, 2);
$wednesdayclosehour = substr($timesrow["wednesday_close"], 0, 2);
$wednesdaycloseminute = substr($timesrow["wednesday_close"], 3, 2);

$thursdayopenhour = substr($timesrow["thursday_open"], 0, 2);
$thursdayopenminute = substr($timesrow["thursday_open"], 3, 2);
$thursdayclosehour = substr($timesrow["thursday_close"], 0, 2);
$thursdaycloseminute = substr($timesrow["thursday_close"], 3, 2);

$fridayopenhour = substr($timesrow["friday_open"], 0, 2);
$fridayopenminute = substr($timesrow["friday_open"], 3, 2);
$fridayclosehour = substr($timesrow["friday_close"], 0, 2);
$fridaycloseminute = substr($timesrow["friday_close"], 3, 2);

$saturdayopenhour = substr($timesrow["saturday_open"], 0, 2);
$saturdayopenminute = substr($timesrow["saturday_open"], 3, 2);
$saturdayclosehour = substr($timesrow["saturday_close"], 0, 2);
$saturdaycloseminute = substr($timesrow["saturday_close"], 3, 2);

$sundayopenhour = substr($timesrow["sunday_open"], 0, 2);
$sundayopenminute = substr($timesrow["sunday_open"], 3, 2);
$sundayclosehour = substr($timesrow["sunday_close"], 0, 2);
$sundaycloseminute = substr($timesrow["sunday_close"], 3, 2);

//Måndag
echo "<form action='../index.php?p=admin&s=times' method='post'>
	Måndag<br />
	<select name='mondayopenhour'>
	<option selected value='Stängt'>Stängt</option>";

for($i = "00"; $i < 24; $i++)
{
	if($i == $mondayopenhour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='mondayopenminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i = $i + 5)
{
	if($i == $mondayopenminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select> - <select name='mondayclosehour'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 24; $i++)
{
	if($i == $mondayclosehour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='mondaycloseminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i = $i + 5)
{
	if($i == $mondaycloseminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}
echo "</select></p><p>";

//Tisdag
echo "Tisdag<br />
	<select name='tuesdayopenhour'>
	<option selected value='Stängt'>Stängt</option>";

for($i = "00"; $i < 24; $i++)
	{
	if($i == $tuesdayopenhour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='tuesdayopenminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
	{
		if($i == $tuesdayopenminute)
	{
	echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select> - <select name='tuesdayclosehour'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 24; $i++)
{
	if($i == $tuesdayclosehour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='tuesdaycloseminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
	{
		if($i == $tuesdaycloseminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}	
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}
echo "</select></p><p>";



//Onsdag
echo "Onsdag<br />
<select name='wednesdayopenhour'>
	<option selected value='Stängt'>Stängt</option>";

for($i = "00"; $i < 24; $i++)
{
	if($i == $wednesdayopenhour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='wednesdayopenminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $wednesdayopenminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select> - <select name='wednesdayclosehour'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 24; $i++)
{
	if($i == $wednesdayclosehour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='wednesdaycloseminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $wednesdaycloseminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}
echo "</select></p><p>";

//Torsdag
echo "Torsdag<br />
	<select name='thursdayopenhour'>
	<option selected value='Stängt'>Stängt</option>";

for($i = "00"; $i < 24; $i++)
{
	if($i == $thursdayopenhour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='thursdayopenminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $thursdayopenminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select> - <select name='thursdayclosehour'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 24; $i++)
{
	if($i == $thursdayclosehour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='thursdaycloseminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $thursdaycloseminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}
echo "</select></p><p>";


//Fredag
echo "Fredag<br />
<select name='fridayopenhour'>
	<option selected value='Stängt'>Stängt</option>";

for($i = "00"; $i < 24; $i++)
{
	if($i == $fridayopenhour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='fridayopenminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $fridayopenminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select> - <select name='fridayclosehour'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 24; $i++)
{
	if($i == $fridayclosehour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='fridaycloseminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $fridaycloseminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}
echo "</select></p><p>";

//Lördag
echo "Lördag<br />
	<select name='saturdayopenhour'>
	<option selected value='Stängt'>Stängt</option>";

for($i = "00"; $i < 24; $i++)
{
	if($i == $saturdayopenhour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='saturdayopenminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $saturdayopenminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select> - <select name='saturdayclosehour'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 24; $i++)
{
	if($i == $saturdayclosehour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='saturdaycloseminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $saturdaycloseminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}
echo "</select></p><p>";


//Söndag
echo "Söndag<br />
	<select name='sundayopenhour'>
	<option selected value='Stängt'>Stängt</option>";

for($i = "00"; $i < 24; $i++)
{
	if($i == $sundayopenhour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='sundayopenminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $sundayopenminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select> - <select name='sundayclosehour'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 24; $i++)
{
	if($i == $sundayclosehour)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}

echo "</select>:<select name='sundaycloseminute'>
	<option selected value='Stängt'>Stängt</option>";
for($i = "00"; $i < 60; $i++)
{
	if($i == $sundaycloseminute)
	{
		echo "<option selected value='" . $i . "'>". $i . "</option>";
	}
	else
	{
		echo "<option value='" . $i . "'>". $i . "</option>";
	}
}
echo "</select></p><p>
		
	<input class='input2' type='submit' value='Ändra' /></p><br />
	<input type='hidden' name='idname' value='". $idname ."' /><input type='hidden' name='week' value='". $week ."' />
				
	</form>";
?>