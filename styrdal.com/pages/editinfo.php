<?php
editinfo();

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
	echo "<form action='../index.php?p=admin&s=info' method='post'>
		idname<br />
		<input class='input4' list='weeks' name='idname' value='" . $idname . "' /><br /></p><p>
		<input class='input2' type='submit' value='Visa' />
		</form><hr />";
}

$sqlitecon = new SQLIte3("database/restauranger.db");
$sqlitesql = "SELECT name, address, number, url, extra, daily, standard FROM restaurants WHERE idname = '". $idname ."'";
$sqlresult = $sqlitecon->query($sqlitesql);

$inforow = $sqlresult->fetchArray(SQLITE3_ASSOC);

echo "<form action='../index.php?p=admin&s=info' method='post'>
	Namn<br />
	<input class='input5' type='text' name='iname' value='" . $inforow["name"] . "' /></p><p>
	Adress<br />
	<input class='input5' type='text' name='iaddress' value='" . $inforow["address"] . "' /></p><p>
	Telefon<br />
	<input class='input5' type='text' name='inumber' value='" . $inforow["number"] . "' /></p><p>
	Hemsida<br />
	<input class='input5' type='text' name='iurl' value='" . $inforow["url"] . "' /></p><p>
	Info<br />
	<textarea class='input3' name='iextra'>" . $inforow["extra"] . "</textarea></p><p>";
if($inforow["standard"] == "true")
{
	echo "<input type='checkbox' name='istandard' value='true' checked/>";
}
else
{
	echo "<input type='checkbox' name='istandard' value='true' />";
}
echo "Har fast meny</p><p>";

if($inforow["daily"] == "true")
{
	echo "<input type='checkbox' name='idaily' value='true' checked />";
}
else
{
	echo "<input type='checkbox' name='idaily' value='true' />";
}

echo "Har dagens</p><p>
	<input class='input2' type='submit' value='Ändra' />
	<input type='hidden' name='idname' value='". $idname ."' />
	</form>
	";

?>