<?php
function adduser($con)
{
	if(isset($_POST["auname"]) || isset($_POST["aupassword"]) || isset($_POST["aulevel"]))
	{
		if (empty($_POST['auname']) || empty($_POST['aupassword']) || empty($_POST['aulevel']))
		{
			return "Fyll i alla fält!<br />";
		}
		else
		{
	
			$auname = $_POST['auname'];
			$aupassword = password_hash($_POST['aupassword'], PASSWORD_DEFAULT);
			$aulevel = $_POST['aulevel'];
			if(isset($_POST['auidname']))
			{
				$auidname = $_POST['auidname'];
			}
			else
			{
				$auidname = null;
			}
				
				
			mysqli_query($con, "INSERT INTO admin (uname, pword, lvl, idname) VALUES ('$auname', '$aupassword', '$aulevel', '$auidname')");
				
			mysqli_close($con);
	
			return "Användare tillagd!<br />";
		}
	}
}
?>