<?php
editmenu();

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
		$idname = "valje";
	}
	echo "<form action='../index.php?p=admin&s=meny' method='post'>
		idname<br />
		<input class='input4' list='weeks' name='idname' value='" . $idname . "' /><br /></p><p>
		<input class='input2' type='submit' value='Visa' />
		</form><hr /><br />";
}

if(isset($_POST["itemid"]))
{
	$itemid = $_POST["itemid"];
}
else
{
	$itemid = null;
}


$sqlitecon = new SQLIte3("database/restauranger.db");
$sqlitesql = "SELECT _id, number, name FROM " . $idname;
$sqliteresult = $sqlitecon->query($sqlitesql);

echo "<form action='../index.php?p=admin&s=meny' method='post'>
	<select name='itemid'>";
while($itemrow = $sqliteresult->fetchArray(SQLITE3_ASSOC))
{
	if($itemrow["_id"] == $itemid)
	{
		echo "<option selected value='" . $itemrow["_id"] . "'>" . $itemrow["number"] . ". " . utf8_decode($itemrow["name"]) . "</option>";
	}
	else
	{
		echo "<option value='" . $itemrow["_id"] . "'>" . $itemrow["number"] . ". " . utf8_decode($itemrow["name"]) . "</option>";
	}
}
echo "</select> <input type='hidden' name='idname' value='". $idname ."' /><input class='input2' type='submit' value='Välj' />
	</form>";

if(isset($_POST["itemid"]))
{

	$itemsql = "SELECT * FROM " . $idname . " WHERE _id='" . $itemid . "'";
	$itemresult = $sqlitecon->query($itemsql);
	$item = $itemresult->fetchArray(SQLITE3_ASSOC);
	
	
	echo "</p><p>
		<form action='../index.php?p=admin&s=meny' method='post'>
		Nummer <br />
		<input type='text' class='input5' name='mnumber' value='" . utf8_decode($item["number"]) . "' /></p><p>
		Namn <br />
		<input type='text' class='input5' name='mname' value='" . utf8_decode($item["name"]) . "' /></p><p>
		Pålägg <br />
		<input type='text' class='input5' name='mtoppings' value='" . utf8_decode($item["toppings"]) . "' /></p><p>
		Extra Info <br />
		<input type='text' class='input5' name='mextra' value='" . utf8_decode($item["extra"]) . "' /></p><p>
		Pris <br />
		<input type='text' class='input5' name='mprice' value='" . utf8_decode($item["price"]) . "' /></p><p>
		Alternativt Pris <br />
		<input type='text' class='input5' name='maltprice' value='" . utf8_decode($item["altprice"]) . "' /></p><p>
		<input class='input2' type='submit' value='Ändra' />
		<input type='hidden' name='idname' value='". $idname ."' />
		<input type='hidden' name='itemid' value='". $item["_id"] ."' />
		";
}
?>