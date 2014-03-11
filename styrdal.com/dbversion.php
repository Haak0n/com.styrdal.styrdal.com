<?php
header('Content-type: text/html; charset=utf-8');

$sqlitecon = new SQLIte3("database/restauranger.db");
$sql = "SELECT version FROM version WHERE _id = 1";
$sqliteresult = $sqlitecon->query($sql);
$sqliterow = $sqliteresult->fetchArray(SQLITE3_ASSOC);

echo $sqliterow["version"];


?>