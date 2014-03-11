<?php


$sqlitecon = new SQLIte3("database/restauranger.db");
remrestaurant($con);
$sqlitesql = "SELECT _id, name, idname FROM restaurants";
$sqliteresult = $sqlitecon->query($sqlitesql);

echo "<form action='../index.php?p=admin&s=remrestaurant' method='post'>
	<select name='remrestaurantid'>";
while($sqliterow = $sqliteresult->fetchArray(SQLITE3_ASSOC))
{
	echo "<option value='" . utf8_decode($sqliterow["idname"]) . "'>" . utf8_decode($sqliterow["name"]) . "</option>";
}
echo "</select> <input class='input2' type='submit' value='Ta bort' />"
?>