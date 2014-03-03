<?php
function editmenu()
{
	$sqlitecon = new SQLIte3("database/restauranger.db");
	if(isset($_POST["mnumber"]) || isset($_POST["mname"]) || isset($_POST["mtoppings"]) || isset($_POST["mextra"]) || isset($_POST["mprice"]) || isset($_POST["maltprice"]))
	{
		$idname = utf8_encode($_POST["idname"]);
		$id = utf8_encode($_POST["itemid"]);
		$number = utf8_encode($_POST["mnumber"]);
		$name = utf8_encode($_POST["mname"]);
		$toppings = utf8_encode($_POST["mtoppings"]);
		$extra = utf8_encode($_POST["mextra"]);
		$price = utf8_encode($_POST["mprice"]);
		$altprice = utf8_encode($_POST["maltprice"]);
		
		$updatesql = "UPDATE " . $idname . " SET
			name='" . $name . "', 
			number='" . $number ."', 
			toppings='" . $toppings . "', 
			extra='" . $extra . "', 
			price='" . $price . "', 
			altprice='" . $altprice . "'
			WHERE _id='" . $id . "'";
		$sqlitecon->query($updatesql);
		
		echo $name . " uppdaterad!";
	}
}
?>