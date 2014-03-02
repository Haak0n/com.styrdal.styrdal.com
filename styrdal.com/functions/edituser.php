<?php
function edituser($con)
{
	if(isset($_POST["euoldpass"]) && isset($_POST["eunewpass"]) && isset($_POST["eunewrepeat"]))
	{
		if($_POST["eunewpass"] == $_POST["eunewrepeat"])
		{
			$checkpasssql = "SELECT pword FROM admin WHERE uname = '". $_SESSION["uname"] . "'";
			$checkpassresult = mysqli_query($con, $checkpasssql);
			$checkpassrow = mysqli_fetch_assoc($checkpassresult);
			$passw = $_POST["euoldpass"];
			$hash = $checkpassrow["pword"];
			
			if(password_verify($passw, $hash))
			{
				$newpass = password_hash($_POST["eunewpass"], PASSWORD_DEFAULT);
				$editpasssql = "UPDATE admin SET pword = '" . $newpass . "' WHERE uname = '" . $_SESSION["uname"] . "'";
				mysqli_query($con, $editpasssql);
				
				echo "Lösenord ändrat!";
			}
			else
			{
				echo "Felaktigt lösenord.";
			}
		}
		else
		{
			echo "Lösenorden stämde inte överrens.";
		}
	}
	
	if(isset($_POST["eumail"]))
	{
		$editmailsql = "UPDATE admin SET email = '" . $_POST["eumail"] . "' WHERE uname = '" . $_SESSION["uname"] . "'";
		mysqli_query($con, $editmailsql);
		
		echo "Email ändrad!";
	}
}
?>