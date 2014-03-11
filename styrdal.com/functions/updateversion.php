<?php
function updateVersion($con)
{
	$getversionsql = "SELECT version FROM version WHERE _id = 1";
	$getversionresult = $con->query($getversionsql);
	$getversionrow = $getversionresult->fetchArray(SQLITE3_ASSOC);
	$currentversion = $getversionrow["version"];
	$nextversion = $currentversion + 1;
	
	$nextversionsql = "UPDATE version SET version = '" . $nextversion . "' WHERE _id = 1";
	$con->query($nextversionsql);
}


?>