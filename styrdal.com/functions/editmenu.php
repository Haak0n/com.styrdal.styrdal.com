<?php
function editmenu()
{
	$sqlitecon = new SQLIte3("database/restauranger.db");
	if(isset($_POST["mnumber"]) || isset($_POST["mname"]) || isset($_POST["mtoppings"]) || isset($_POST["mextra"]) || isset($_POST["mprice"]) || isset($_POST["maltprice"]))
	{
		$idname = $_POST["idname"];
		$id = $_POST["itemid"];
		$number = $_POST["mnumber"];
		$name = $_POST["mname"];
		$toppings = $_POST["mtoppings"];
		$extra = $_POST["mextra"];
		$price = $_POST["mprice"];
		$altprice = $_POST["maltprice"];
		
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