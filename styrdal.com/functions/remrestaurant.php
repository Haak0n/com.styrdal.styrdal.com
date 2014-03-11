<?php
function remrestaurant()
{
	if(isset($_POST["remrestaurantid"]))
	{
		$idname = $_POST["remrestaurantid"];
		$con = new SQLIte3("database/restauranger.db");
		
		$sql1 = "DELETE FROM restaurants WHERE idname = '" . $idname ."'";
		$con->query($sql1);
		$sql2 = "DROP TABLE " . $idname;
		$con->query($sql2);
		
		echo "Restaurang borttagen!";
		updateVersion($con);
	}
}
?>